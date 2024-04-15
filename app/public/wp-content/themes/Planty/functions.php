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

function ajouter_element_menu_principal($items, $args)
{
    // Vérifier si le menu actuel est le menu principal
    if ($args->theme_location == 'Primary Menu') {
        // Ajouter votre élément supplémentaire ici
        $element_supplementaire = '<li><a href="#">Élément supplémentaire</a></li>';
        // Ajouter l'élément supplémentaire à la fin du menu
        $items .= $element_supplementaire;
    }
    return $items;
}
add_filter('wp_nav_menu_items', 'ajouter_element_menu_principal', 10, 2);
