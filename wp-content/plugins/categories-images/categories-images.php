<?php
/**
 * @package CategoriesImages
 */

/**
 * Plugin Name: Categories Images
 * Plugin URI: http://zahlan.net/blog/categories-images/
 * Description: Categories Images Plugin allow you to add an image to category or any custom term.
 * Author: Muhammad El Zahlan
 * Version: 3.0.1
 * Author URI: http://zahlan.net/
 * Domain Path: /languages
 * Text Domain: categories-images
 * License: GPLv2 or later
 */

if (!defined('ABSPATH'))
    die;

if (!defined('Z_PLUGIN_URL'))
    define('Z_PLUGIN_URL', untrailingslashit(plugins_url('', __FILE__)));

class ZCategoriesImages
{
    public $plugin_name;
    private $zci_placeholder;

    function __construct() {
        $this->plugin_name = plugin_basename(__FILE__);

        // The placeholder image url
        $this->zci_placeholder = plugins_url('/assets/images/placeholder.png', __FILE__);
        add_action('admin_init', [$this, 'zAdminInit']);

        // save our taxonomy image while edit or create term
        add_action('edit_term', [$this, 'zSaveTaxonomyImage']);
        add_action('create_term', [$this, 'zSaveTaxonomyImage']);

        // Plugin menu in admin panel
        add_action('admin_menu', [$this, 'zSettingsMenu']);

        // Settings page link in plugins list
        add_filter("plugin_action_links_{$this->plugin_name}", [$this, 'zSettingsLink']);
    }

    function zAdminInit() {
        $z_taxonomies = get_taxonomies();
        if (is_array($z_taxonomies)) {
            $zci_options = get_option('zci_options');
            
            if (!is_array($zci_options))
                $zci_options = array();
            
            if (empty($zci_options['excluded_taxonomies']))
                $zci_options['excluded_taxonomies'] = array();
            
            foreach ($z_taxonomies as $z_taxonomy) {
                if (in_array($z_taxonomy, $zci_options['excluded_taxonomies']))
                    continue;
                add_action($z_taxonomy.'_add_form_fields', [$this, 'zAddTexonomyField']);
                add_action($z_taxonomy.'_edit_form_fields', [$this, 'zEditTexonomyField']);
                add_filter('manage_edit-'.$z_taxonomy.'_columns', [$this, 'zTaxonomyColumns']);
                add_filter('manage_'.$z_taxonomy.'_custom_column', [$this, 'zTaxonomyColumn'], 10, 3 );

                // If tax is deleted
                add_action("delete_{$z_taxonomy}", function($tt_id) {
                    delete_option('z_taxonomy_image'.$tt_id);
                });
            }
        }

        // Register styles and scripts
        if ( strpos( $_SERVER['SCRIPT_NAME'], 'edit-tags.php' ) > 0 || strpos( $_SERVER['SCRIPT_NAME'], 'term.php' ) > 0 ) {
            add_action('admin_enqueue_scripts', [$this, 'zAdminEnqueue']);
            add_action('quick_edit_custom_box', [$this, 'zQuickEditCustomBox'], 10, 3);
        }

        // Register settings
        register_setting('zci_options', 'zci_options');
        add_settings_section('zci_settings', __('Categories Images settings', 'categories-images'), [$this, 'zSectionText'], 'zci-options');
        add_settings_field('z_excluded_taxonomies', __('Excluded Taxonomies', 'categories-images'), [$this, 'zExcludedTaxonomies'], 'zci-options', 'zci_settings');
    }

    function zAdminEnqueue() {
        wp_enqueue_style('categories-images-styles', plugins_url('/assets/css/zci-styles.css', __FILE__));
        wp_enqueue_script('categories-images-scripts', plugins_url('/assets/js/zci-scripts.js', __FILE__));

        $zci_js_config = [
            'wordpress_ver' => get_bloginfo("version"),
            'placeholder' => $this->zci_placeholder
        ];
        wp_localize_script('categories-images-scripts', 'zci_config', $zci_js_config);
    }

    // add image field in add form
    function zAddTexonomyField() {
        if (get_bloginfo('version') >= 3.5)
            wp_enqueue_media();
        else {
            wp_enqueue_style('thickbox');
            wp_enqueue_script('thickbox');
        }
        
        echo '<div class="form-field">
            <label for="zci_taxonomy_image">' . __('Image', 'categories-images') . '</label>
            <input type="text" name="zci_taxonomy_image" id="zci_taxonomy_image" value="" />
            <br/>
            <button class="z_upload_image_button button">' . __('Upload/Add image', 'categories-images') . '</button>
        </div>';
    }

    // add image field in edit form
    function zEditTexonomyField($taxonomy) {
        if (get_bloginfo('version') >= 3.5)
            wp_enqueue_media();
        else {
            wp_enqueue_style('thickbox');
            wp_enqueue_script('thickbox');
        }
        
        if ($this->zTaxonomyImageUrl( $taxonomy->term_id, NULL, TRUE ) == $this->zci_placeholder) 
            $image_url = "";
        else
            $image_url = $this->zTaxonomyImageUrl( $taxonomy->term_id, NULL, TRUE );
        echo '<tr class="form-field">
            <th scope="row" valign="top"><label for="zci_taxonomy_image">' . __('Image', 'categories-images') . '</label></th>
            <td><img class="zci-taxonomy-image" src="' . $this->zTaxonomyImageUrl( $taxonomy->term_id, 'medium', TRUE ) . '"/><br/><input type="text" name="zci_taxonomy_image" id="zci_taxonomy_image" value="'.$image_url.'" /><br />
            <button class="z_upload_image_button button">' . __('Upload/Add image', 'categories-images') . '</button>
            <button class="z_remove_image_button button">' . __('Remove image', 'categories-images') . '</button>
            </td>
        </tr>';
    }

    /**
     * Thumbnail column added to category admin.
     *
     * @access public
     * @param mixed $columns
     * @return void
     */
    function zTaxonomyColumns( $columns ) {
        $new_columns = array();
        $new_columns['cb'] = $columns['cb'];
        $new_columns['thumb'] = __('Image', 'categories-images');

        unset( $columns['cb'] );

        return array_merge( $new_columns, $columns );
    }

    /**
     * Thumbnail column value added to category admin.
     *
     * @access public
     * @param mixed $columns
     * @param mixed $column
     * @param mixed $id
     * @return void
     */
    function zTaxonomyColumn( $columns, $column, $id ) {
        if ( $column == 'thumb' )
            $columns = '<span><img src="' . $this->zTaxonomyImageUrl($id, 'thumbnail', TRUE) . '" alt="' . __('Thumbnail', 'categories-images') . '" class="wp-post-image" /></span>';
        
        return $columns;
    }

    function zQuickEditCustomBox($column_name, $screen, $name) {
        if ($column_name == 'thumb') 
            echo '<fieldset>
            <div class="thumb inline-edit-col">
                <label>
                    <span class="title"><img src="" alt="Thumbnail"/></span>
                    <span class="input-text-wrap"><input type="text" name="zci_taxonomy_image" value="" class="tax_list" /></span>
                    <span class="input-text-wrap">
                        <button class="z_upload_image_button button">' . __('Upload/Add image', 'categories-images') . '</button>
                        <button class="z_remove_image_button button">' . __('Remove image', 'categories-images') . '</button>
                    </span>
                </label>
            </div>
        </fieldset>';
    }

    function zSaveTaxonomyImage($term_id) {
        if(isset($_POST['zci_taxonomy_image'])) {
            update_option('z_taxonomy_image'.$term_id, $_POST['zci_taxonomy_image'], false);
        }
    }

    // get attachment ID by image url
    function zGetAttachmentIdByUrl($image_src) {
        global $wpdb;
        $query = $wpdb->prepare("SELECT ID FROM $wpdb->posts WHERE guid = %s", $image_src);
        $id = $wpdb->get_var($query);
        return (!empty($id)) ? $id : NULL;
    }

    // get taxonomy image url for the given term_id (Place holder image by default)
    function zTaxonomyImageUrl($term_id = NULL, $size = 'full', $return_placeholder = FALSE) {
        if (!$term_id) {
            if (is_category())
                $term_id = get_query_var('cat');
            elseif (is_tag())
                $term_id = get_query_var('tag_id');
            elseif (is_tax()) {
                $current_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
                $term_id = $current_term->term_id;
            }
        }
        
        $taxonomy_image_url = get_option('z_taxonomy_image'.$term_id);
        if(!empty($taxonomy_image_url)) {
            $attachment_id = $this->zGetAttachmentIdByUrl($taxonomy_image_url);
            if(!empty($attachment_id)) {
                $taxonomy_image_url = wp_get_attachment_image_src($attachment_id, $size);
                $taxonomy_image_url = $taxonomy_image_url[0];
            }
        }

        if ($return_placeholder)
            return ($taxonomy_image_url != '') ? $taxonomy_image_url : $this->zci_placeholder;
        else
            return $taxonomy_image_url;
    }

    // display taxonomy image for the given term_id
    function zTaxonomyImage($term_id = NULL, $size = 'full', $attr = NULL, $echo = TRUE) {
        if (!$term_id) {
            if (is_category())
                $term_id = get_query_var('cat');
            elseif (is_tag())
                $term_id = get_query_var('tag_id');
            elseif (is_tax()) {
                $current_term = get_term_by('slug', get_query_var('term'), get_query_var('taxonomy'));
                $term_id = $current_term->term_id;
            }
        }
        
        $taxonomy_image_url = get_option('z_taxonomy_image'.$term_id);
        if(!empty($taxonomy_image_url)) {
            $attachment_id = $this->zGetAttachmentIdByUrl($taxonomy_image_url);
            if(!empty($attachment_id))
                $taxonomy_image = wp_get_attachment_image($attachment_id, $size, FALSE, $attr);
            else {
                $image_attr = '';
                if(is_array($attr)) {
                    if(!empty($attr['class']))
                        $image_attr .= ' class="'.$attr['class'].'" ';
                    if(!empty($attr['alt']))
                        $image_attr .= ' alt="'.$attr['alt'].'" ';
                    if(!empty($attr['width']))
                        $image_attr .= ' width="'.$attr['width'].'" ';
                    if(!empty($attr['height']))
                        $image_attr .= ' height="'.$attr['height'].'" ';
                    if(!empty($attr['title']))
                        $image_attr .= ' title="'.$attr['title'].'" ';
                }
                $taxonomy_image = '<img src="'.$taxonomy_image_url.'" '.$image_attr.'/>';
            }
        }
        else{
            $taxonomy_image = '';
        }

        if ($echo)
            echo $taxonomy_image;
        else
            return $taxonomy_image;
    }

    function zSettingsMenu() {
        add_menu_page(__('Categories Images settings', 'categories-images'), __('Categories Images', 'categories-images'), 'manage_options', 'zci_settings', [$this, 'zSettingsPage'], 'dashicons-format-image', 80);
    }

    // Plugin option page
    function zSettingsPage() {
        if (!current_user_can('manage_options'))
            wp_die(__( 'You do not have sufficient permissions to access this page.', 'categories-images'));
        require_once plugin_dir_path(__FILE__).'templates/admin.php';
    }

    function zSettingsLink($links) {
        $settings_link = '<a href="admin.php?page=zci_settings">Settings</a>';
        array_push($links, $settings_link);
        return $links;
    }

    // Settings section description
    function zSectionText() {
        echo '<p>'.__('Please select the taxonomies you want to exclude it from Categories Images plugin', 'categories-images').'</p>';
    }

    // Excluded taxonomies checkboxs
    function zExcludedTaxonomies() {
        $options = get_option('zci_options');
        $disabled_taxonomies = ['nav_menu', 'link_category', 'post_format'];
        foreach (get_taxonomies() as $tax) : if (in_array($tax, $disabled_taxonomies)) continue; ?>
            <input type="checkbox" name="zci_options[excluded_taxonomies][<?php echo $tax ?>]" value="<?php echo $tax ?>" <?php checked(isset($options['excluded_taxonomies'][$tax])); ?> /> <?php echo $tax ;?><br />
        <?php endforeach;
    }
    
    function activate() {
        // Things will happen if the plugin activated.
        flush_rewrite_rules();
    }

    function deactivate() {
        // Things will happen if the plugin deactivated.
        flush_rewrite_rules();
    }
}

if (class_exists('ZCategoriesImages')) {
    $z_categories_images = new ZCategoriesImages();

    // After activating the plugin
    register_activation_hook(__FILE__, [$z_categories_images, 'activate']);

    // After deactivating the plugin
    register_deactivation_hook(__FILE__, [$z_categories_images, 'deactivate']);
    
    function z_taxonomy_image_url($term_id = NULL, $size = 'full', $return_placeholder = FALSE) {
        $zci = new ZCategoriesImages();
        return $zci->zTaxonomyImageUrl($term_id, $size, $return_placeholder);
    }

    function z_taxonomy_image($term_id = NULL, $size = 'full', $attr = NULL, $echo = TRUE) {
        $zci = new ZCategoriesImages();
        return $zci->zTaxonomyImage($term_id, $size, $attr, $echo);
    }
}