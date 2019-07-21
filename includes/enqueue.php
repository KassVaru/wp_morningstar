<?php

function enqueue_scripts_and_styles(){
    // Styles for website
    wp_enqueue_style('main-css', get_template_directory_uri() . '/src/style.css', false, null);
    wp_enqueue_style('fontawesome-css', get_template_directory_uri() . '/src/font-awesome/all.min.css', false, null);
    wp_enqueue_style('bootstrap-css', get_template_directory_uri() . '/src/bootstrap/css/bootstrap.min.css', false, null);

    // Scripts for website
    wp_enqueue_script('jquery-js', get_template_directory_uri() . '/src/jquery.min.js', array('jquery'), null, true);
    wp_enqueue_script('popper-js', get_template_directory_uri() . '/src/bootstrap/js/popper.min.js', array('jquery'), null, true);
    wp_enqueue_script('fontawesome-js', get_template_directory_uri() . '/src/font-awesome/all.min.js', array('jquery'), null, false);
    wp_enqueue_script('main-js', get_template_directory_uri() . '/src/app.js', array('jquery'), null, true);
    wp_enqueue_script('bootstrap-js', get_template_directory_uri() . '/src/bootstrap/js/bootstrap.min.js', array('jquery'), null, true);
}

add_action('wp_enqueue_scripts', 'enqueue_scripts_and_styles', 100);