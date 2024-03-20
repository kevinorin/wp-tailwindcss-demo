<?php
  function mytheme_enqueue_styles() {
  // Register the style like this for a theme:
  wp_register_style( 'theme-style', get_template_directory_uri() . '/style.css', array(), '1.0', 'all' );
  // Enqueue the style:
  wp_enqueue_style( 'theme-style' );
}

  add_action( 'wp_enqueue_scripts', 'mytheme_enqueue_styles' );

