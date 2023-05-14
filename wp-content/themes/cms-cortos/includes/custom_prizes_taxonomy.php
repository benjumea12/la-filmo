<?php

add_action('corto_prize_add_form_fields', 'prize_add_term_fields');

function prize_add_term_fields($taxonomy)
{
?>
  <div class="form-field">
    <label for="prize_text">Premio principal</label>
    <input type="checkbox" name="main_prize" id="main_prize" />
    <p class="description">Marcar si es un remio principal.</p>
  </div>
<?php
}



add_action('corto_prize_edit_form_fields', 'prize_edit_term_fields', 10, 2);
function prize_edit_term_fields($term, $taxonomy)
{

  // get meta data value
  $main_prize = get_term_meta($term->term_id, 'main_prize', true);

?>

  <tr class="form-field">
    <th><label for="prize_text">Premio principal</label></th>
    <td>
      <input type="checkbox" name="main_prize" id="main_prize" <?php echo $main_prize ? "checked" : false; ?> />
      <p class="description">Marcar si es un remio principal.</p>
    </td>
  </tr>
<?php
}


add_action('created_corto_prize', 'prize_save_term_fields');
add_action('edited_corto_prize', 'prize_save_term_fields');
function prize_save_term_fields($term_id)
{
  update_term_meta(
    $term_id,
    'main_prize',
    isset($_POST['main_prize']) ? 1 : 0
  );
}
