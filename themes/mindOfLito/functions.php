<?php

//Adds script and stylesheets
function mindOfLito_files() {
    wp_enqueue_style('mindOfLito_styles', get_stylesheet_uri('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
    wp_enqueue_script('load-fa', 'https://kit.fontawesome.com/e785bdc78c.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/build/js/main.min.js');  
}

add_action('wp_enqueue_scripts', 'mindOfLito_files');

//Adds theme support - ex: title tag
function mindOfLito_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'mindOfLito_features');

function mindOfLito_widgets () {

    register_sidebar(array(
        'name' => 'About Section',
        'id' => 'about',
        'description' => 'About me information',
        'before_widget' => '<div class="about-section">',
        'after_widget' => '</div>',
    ));
}

add_action ('widgets_init', 'mindOfLito_widgets') ;

?>