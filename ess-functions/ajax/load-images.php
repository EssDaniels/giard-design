<?php

function load_more_images()
{
  $gallery_html = get_post_gallery(get_option('page_on_front'), false);
  $image_ids = [];

  if (isset($gallery_html['ids'])) {
    $ids = explode(',', $gallery_html['ids']);

    // Potrójny układ ID
    $image_ids = array_merge($ids);
  }
  $additional_images =  $image_ids;
  $image_urls = [];

  foreach ($additional_images as $id) {
    $image_urls[] = wp_get_attachment_url($id);
  }

  echo json_encode($image_urls);
  die();
}
add_action('wp_ajax_load_more_images', 'load_more_images'); // Dla zalogowanych użytkowników
add_action('wp_ajax_nopriv_load_more_images', 'load_more_images'); // Dla niezalogowanych użytkowników