<?php

// Agregando los archivos CSS y JS

function gt_setup(){
    wp_enqueue_style('google-fonts', '://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
    wp_enqueue_script('fontawesome', '//kit.fontawesome.com/1696329706.js');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script('app', get_theme_file_uri('/js/app.js'), NULL, microtime(), true);
    
}

add_action('wp_enqueue_scripts', 'gt_setup');

function themeInit(){
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'themeInit');
?>

