<?php

//Adds script and stylesheets
function mindOfLito_files() {

    wp_enqueue_style('owl_styles', get_template_directory_uri() . ('/owl/owl.theme.default.css'), NULL, microtime());
    wp_enqueue_style('owl_theme', get_template_directory_uri() . ('/owl/owl.carousel.css'), NULL, microtime());
    wp_enqueue_style('sass', get_template_directory_uri() . ('/build/css/style.min.css'), NULL, microtime());
    wp_enqueue_style('fonts', "https://fonts.googleapis.com/css?family=Lato&display=swap");
    wp_enqueue_script('load-fa', 'https://kit.fontawesome.com/e785bdc78c.js');
    wp_enqueue_script('jquery');
    wp_enqueue_script('main-js', get_template_directory_uri() . '/js/main.js');  
    wp_enqueue_script('owl-js', get_template_directory_uri() . '/owl/owl.carousel.js');  
    // wp_enqueue_script('main-js', get_template_directory_uri() . '/build/js/main.min.js');  
    wp_enqueue_style( 'animate_css', 'https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.compat.css' );
}

add_action('wp_enqueue_scripts', 'mindOfLito_files');

//Adds theme support - ex: title tag
function mindOfLito_features() {
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    register_nav_menus (array(
        'nav' => 'Nav',
    ));
}

add_action('after_setup_theme', 'mindOfLito_features');

function mindOfLito_widgets () {

    register_sidebar(array(
        'name' => 'Header Title',
        'id' => 'header',
        'description' => 'Header information',
        'before_widget' => '<div class="header-title">',
        'after_widget' => '</div>',
    ));

    register_sidebar(array(
        'name' => 'Footer Text',
        'id' => 'footer',
        'description' => 'Footer information',
        'before_widget' => '<div class="footer-text">',
        'after_widget' => '</div>',
    ));
}

add_action ('widgets_init', 'mindOfLito_widgets') ;


add_filter( 'rwmb_meta_boxes', 'register_meta_boxes' );

function register_meta_boxes( $meta_boxes ) {
    $prefix = '_';

    $meta_boxes[] = [
        'title'      => esc_html__( 'Video Information' ),
        'id'         => 'video-link',
        'post_types' => ['post'],
        'context'    => 'normal',
        'priority'   => 'high',
        'fields'     => [
            [
                'type' => 'video',
                'id'   => $prefix . 'video-link',
                'max_file_uploads' => 1,
                'name' => esc_html__( 'Video Link' ),
                'max_status'       => false,
            ],
            [
                'type' => 'textarea',
                'id'   => $prefix . 'description',
                'name' => esc_html__( 'Description' ),
            ],
        ],
    ];

    return $meta_boxes;
}

?>