<?php

// Shortcode
include __DIR__ . '/shortcode/utils.php';
include __DIR__ . '/shortcode/service.php';
include __DIR__ . '/shortcode/social.php';
include __DIR__ . '/shortcode/product.php';

// Customizer
include __DIR__ . '/customizer/main.php';

// Importing CSS & JS Files
function import_scripts_and_styles() {
    // wp_enqueue_style('medical-icon.css', get_stylesheet_directory_uri() . '/packages/webfont-medical-icons/css/wfmi-style.css', array(), time(), false );
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_style('dashicons');   
    wp_enqueue_script('JQuery', get_stylesheet_directory_uri() . '/js/jquery.min.js', array(), '', true);
    wp_enqueue_script('MainJS', get_stylesheet_directory_uri() . '/js/main.js', array(), '', true);
    if (!is_home()) {
        wp_enqueue_script('ProductSlider', get_stylesheet_directory_uri() . '/js/productSlider.js', array(), '', true);   
    }
}
add_action('wp_enqueue_scripts', 'import_scripts_and_styles');

// Excerpt Post
function get_excerpt_length() {
    return 10;
}

function return_excerpt_text() {
    return '';
}

add_filter('excerpt_more', 'return_excerpt_text');
add_filter('excerpt_length', 'get_excerpt_length');

// Menu
function setup_init()
{
    register_nav_menus(array(        
        'main_menu' => 'TOP MENU',   
        'footer_menu_1' => 'FOOTER MENU 1',
        'footer_menu_2' => 'FOOTER MENU 2',
        'footer_menu_3' => 'FOOTER MENU 3',
        'footer_menu_4' => 'FOOTER MENU 4',
        'footer_menu_5' => 'FOOTER MENU 5',
        'footer_menu_6' => 'FOOTER MENU 6',
    ));

    add_theme_support('post-thumbnails');
}

add_action('after_setup_theme', 'setup_init');

// Widget
// function widget_setup()
// {
//     register_sidebar([
//         'name' => 'Address On Footer',
//         'id' => 'address',
//         'before_widget' => '',       
//         'after_widget' => '',        
//         'before_title' => '',        
//         'after_title' => '',
//     ]);
// }

// add_action('widgets_init', 'widget_setup');


function css_utility_colors()
{
    ?>
    <style type="text/css">
        :root {
            --white: <?php echo get_theme_mod('white', '#ffffff'); ?>;
            --light: <?php echo get_theme_mod('light', '#f1f2f6'); ?>;
            --dark:  <?php echo get_theme_mod('dark', '#2f3542'); ?>;
            --primary: <?php echo get_theme_mod('primary', '#3742fa'); ?>;
            --info: <?php echo get_theme_mod('info', '#70a1ff'); ?>;
            --secondary: <?php echo get_theme_mod('secondary', '#747d8c'); ?>;
            --danger: <?php echo get_theme_mod('danger', '#ff4757'); ?>;
            --success: <?php echo get_theme_mod('success', '#2ed573'); ?>;
            --warning: <?php echo get_theme_mod('warning', '#eccc68'); ?>;
            --brand: <?php echo get_theme_mod('brand', '#33b250'); ?>;
            --darken: <?php echo get_theme_mod('darken', '#161a1f'); ?>;
        }
    </style>
    <?php
}
add_action('wp_head', 'css_utility_colors');
add_action( 'woocommerce_after_add_to_cart_button', 'details_custom_button', 10 );
function details_custom_button() {
  echo '<a href="#link-here"><button type="button" class="button back-woo-button">Name Here </button></a>'; 
}