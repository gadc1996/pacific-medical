<?php

// Agregando los archivos CSS y JS

function gt_setup(){
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script('app', get_theme_file_uri('/js/app.js'), NULL, microtime(), true);
    
}

add_action('wp_enqueue_scripts', 'gt_setup');
?>