<?php
//Add CSS and JS files
function gt_setup(){
    wp_enqueue_style('google-fonts', '://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap');
    wp_enqueue_script('fontawesome', '//kit.fontawesome.com/1696329706.js');
    wp_enqueue_style('style', get_stylesheet_uri(), NULL, microtime());
    wp_enqueue_script('app', get_theme_file_uri('/js/app.js'), NULL, microtime(), true);
    wp_enqueue_script('burger', get_theme_file_uri('/js/burger.js'), NULL, microtime(), true);
    
}
add_action('wp_enqueue_scripts', 'gt_setup');


//Post configuration
function themeInit(){
    add_theme_support('post-thumbnails');
}
add_action('after_setup_theme', 'themeInit');


//Custom post types
function create_posttype() {
    register_post_type( 'doctor',
        array(
						'rewrite' => array('slug' => 'doctors'),
            'labels' => array(
                'name' => 'Doctors' ,
								'singular_name' => 'Doctors',
								'add_new_item' => 'Add new doctor',
								'edit_item' => 'Edit Doctor'
						),
						'menu-icon' => 'dashicons-admin-users',
            'public' => true,
            'has_archive' => true,
						'supports' => array(
							'title','thumbnail','editor', 'excerpt'
						) 
        )
    );
}
add_action( 'init', 'create_posttype' );
?>
