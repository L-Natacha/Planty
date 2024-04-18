<?php

function theme_enqueue_styles()
{
    // Enregistrement du style du thème parent.
    wp_enqueue_style('parent-style', get_template_directory_uri() . '/style.css');

    // Enregistrement du style du thème enfant.
    wp_enqueue_style('child-style', get_stylesheet_uri(), array('parent-style'));
}
add_action('wp_enqueue_scripts', 'theme_enqueue_styles');

/* affichage Navigation  */
function ajouter_page_admin($items, $args)
{
    if (is_user_logged_in()) {
        $items .= '<li class="page_admin"> <a href="http://planty.local/wp-admin/">Admin</a> </li>';
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_page_admin', 10, 2);
