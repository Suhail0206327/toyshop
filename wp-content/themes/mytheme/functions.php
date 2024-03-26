<?php

register_nav_menus( array(
    'primary'   => __( 'Primary Menu', 'project2' ),
    'secondary' => __( 'Secondary Menu', 'project2' )
) );

add_theme_support( 'post-thumbnails' );
add_theme_support( 'custom-logo' );
add_theme_support('title-tag');
// wp_enqueue_style( 'slider', get_template_directory_uri() . '/style.css', false, '1.1', 'all');
wp_enqueue_style( 'style', get_stylesheet_uri() );
