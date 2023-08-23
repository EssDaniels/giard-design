<?php

function theme_prefix_setup()
{
  add_theme_support('custom-logo');
}
add_action('after_setup_theme', 'theme_prefix_setup');
