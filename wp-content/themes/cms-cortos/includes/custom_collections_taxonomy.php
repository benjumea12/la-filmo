<?php

add_action('corto_collection_add_form_fields', 'rudr_add_term_fields');

function rudr_add_term_fields($taxonomy)
{
?>
  <div class="form-field">
    <label for="rudr_text">@artista</label>
    <input type="text" name="collection_artist" id="collection_artist" />
    <p class="description">@ del artista.</p>
  </div>
  <div class="form-field">
    <label for="rudr_text">Link de red</label>
    <input type="text" name="collection_red" id="collection_red" />
    <p class="description">Link de red.</p>
  </div>
<?php
}



add_action('corto_collection_edit_form_fields', 'rudr_edit_term_fields', 10, 2);
function rudr_edit_term_fields($term, $taxonomy)
{

  // get meta data value
  $collection_artist = get_term_meta($term->term_id, 'collection_artist', true);
  $collection_red = get_term_meta($term->term_id, 'collection_red', true);

?>

  <tr class="form-field">
    <th><label for="rudr_text">@ del artista</label></th>
    <td>
      <input type="text" name="collection_artist" id="collection_artist" value="<?php echo esc_attr($collection_artist) ?>" />
      <p class="description">@ del artista.</p>
    </td>
  </tr>
  <tr class="form-field">
    <th><label for="rudr_text">Link de red</label></th>
    <td>
      <input type="text" name="collection_red" id="collection_red" value="<?php echo esc_attr($collection_red) ?>" />
      <p class="description">Link de red.</p>
    </td>
  </tr>
<?php
}


add_action('created_corto_collection', 'rudr_save_term_fields');
add_action('edited_corto_collection', 'rudr_save_term_fields');
function rudr_save_term_fields($term_id)
{

  update_term_meta(
    $term_id,
    'collection_artist',
    sanitize_text_field($_POST['collection_artist'])
  );
  update_term_meta(
    $term_id,
    'collection_red',
    sanitize_text_field($_POST['collection_red'])
  );
}
