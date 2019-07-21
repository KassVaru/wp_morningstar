<?php
require get_template_directory() . '/includes/enqueue.php';
require get_template_directory() . '/includes/security.php';
require get_template_directory() . '/includes/metaboxes.php';
require get_template_directory() . '/includes/widgets.php';
require_once get_template_directory() . '/includes/class-wp-bootstrap-navwalker.php';

add_theme_support( 'menus' );
add_theme_support( 'post-thumbnails' );

function register_menu_support() {
  register_nav_menus(
    array(
      'primary-menu' => __( 'Header Menu' ),
      'secondary-menu' => __( 'Footer Menu' ),
    )
  );
}
add_action( 'init', 'register_menu_support' );