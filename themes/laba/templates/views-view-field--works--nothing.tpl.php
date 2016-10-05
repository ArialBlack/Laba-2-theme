<?php

/**
 * @file
 * This template is used to print a single field in a view.
 *
 * It is not actually used in default Views, as this is registered as a theme
 * function which has better performance. For single overrides, the template is
 * perfectly okay.
 *
 * Variables available:
 * - $view: The view object
 * - $field: The field handler object that can process the input
 * - $row: The raw SQL result that can be used
 * - $output: The processed output that will normally be used.
 *
 * When fetching output from the $row, this construct should be used:
 * $data = $row->{$field->field_alias}
 *
 * The above will guarantee that you'll always get the correct data,
 * regardless of any changes in the aliasing that might happen if
 * the view is modified.
 */

/*if($output) {
  dpm($row);
}
else { }*/
?>

<?php
  //print $row->node_title;
  if ($row->field_field_prev) {
    $prev_img_url = file_create_url($row->field_field_prev['0']['raw']['uri']);
  }

  if ($row->field_field_slider_preview) {
    $prev_sl_url = $row->field_field_slider_preview['0']['raw']['uri'];
    $prev_sl_style = "background-image: url('" . image_style_url("frontworks", $prev_sl_url) . "')";
  }

  if ($row->field_field_slider_preview_1) {
    $prev_sl_url1 = $row->field_field_slider_preview_1['0']['raw']['uri'];
    $prev_sl_style1 = "background-image: url('" . image_style_url("frontworks-overlay", $prev_sl_url1) . "')";
  }

  $output = "";
  $output = $output . '<div class="cfw text-center">';
    $output = $output . '<div class="content-container"><div class="container text-center">';
      $output = $output . '<h2 class="short_name">' . $row->field_field_short_name['0']['raw']['safe_value'] . '</h2>';
      $output = $output . '<h3 class="title">' . $row->node_title . '</h3>';
      $output = $output . '<a class="link-2-work" href="/node/' . $row->nid . '"><img class="img-circle" src="' . $prev_img_url . '" /></a>';
      $output = $output .  '<div class="intro">' . $row->field_field_intro['0']['rendered']['#markup'] . '<a class="btn btn-default" href="/node/' . $row->nid . '">' . t('Read more') . '</a></div>';
  $output = $output . '</div></div>';

    $output = $output . '<div class="work-bg-container">';
      $output = $output . '<div class="work-bg-overlay" style="' . $prev_sl_style1 . '"></div>';
      $output = $output . '<div class="work-bg-default" style="' . $prev_sl_style . '"></div>';
    $output = $output . '</div>';
  $output = $output . '</div>';

  print $output;
?>



