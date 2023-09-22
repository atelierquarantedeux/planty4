<?php

// Function to link to file

add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

function theme_enqueue_styles()
{
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');
    wp_enqueue_style('theme-style', get_stylesheet_directory_uri() . '/theme.css', array(), filemtime(get_stylesheet_directory() . '/theme.css'));
}

// Hook to have admin in navbar

add_filter('wp_nav_menu_items','add_admin_link', 10, 2);

function add_admin_link($items, $args) {
    if (is_user_logged_in() && ($args->theme_location == 'menu-1')) {
        $items  .= '<li><a  href="http://localhost:81/planty/admin/">Admin</a></li>';
    }
    return $items;
}


// This theme uses wp_nav_menu() in one location.

register_nav_menus(
    array(
        'menu-1' => esc_html( 'Primary', 'plantyUnderscoreChild' ),
        'menu-2' => esc_html( 'Secondary', 'plantyUnderscoreChild' ),          
    )
);