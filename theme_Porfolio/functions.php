<?php

// Ajoute le support pour les images à la une au thème personnalisé
add_theme_support('post-thumbnails');

// Menu
function pw_creer_menu() {
	register_nav_menu('menu_principal', 'Menu principal');
}
add_action('init', 'pw_creer_menu');


// Register Custom Post Type
function enqueue_custom_scripts() {
    // Enqueue your JavaScript file
    wp_enqueue_script('icons-script', get_template_directory_uri() . '/path/to/your/icons.js', array(), null, true);
}
add_action('wp_enqueue_scripts', 'enqueue_custom_scripts');
