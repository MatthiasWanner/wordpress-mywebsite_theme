<?php 
include 'includes/functions/api.php';
include 'includes/functions/admin_menus.php';


function theme_register_assets () {
    wp_enqueue_style('style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'theme_register_assets');

function theme_init() {
    include 'includes/functions/nav_menus.php';
}
add_action( 'init', 'theme_init' );