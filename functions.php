<?php
// Check if another plugin or theme has bundled ACF
if ( defined( 'MY_ACF_PATH' ) ) {
    return;
}

define( 'MY_ACF_PATH', get_stylesheet_directory() . '/includes/acf/' );
define( 'MY_ACF_URL', get_stylesheet_directory_uri() . '/includes/acf/' );

// Include the ACF plugin.
include_once( MY_ACF_PATH . 'acf.php' );

// Customize the URL setting to fix incorrect asset URLs.
add_filter('acf/settings/url', 'my_acf_settings_url');
function my_acf_settings_url( $url ) {
    return MY_ACF_URL;
}

//supports
add_theme_support('menus');
add_theme_support('post-thumbnails');


//fields
require_once 'includes/fields/options.php';
require_once 'blocks/home/fields.php';

function elite_theme_acf_blocks() {
    register_block_type( __DIR__ . '/blocks/home' );
}
add_action( 'init', 'elite_theme_acf_blocks' );


function mi_tema_styles()
{
    wp_enqueue_style('mi-tema-style', get_stylesheet_uri());
}

add_action('wp_enqueue_scripts', 'mi_tema_styles');
add_action('admin_enqueue_scripts', 'mi_tema_styles');

function my_custom_script()
{

    wp_enqueue_style('carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css');
    wp_enqueue_style('carousel-theme', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css');
    wp_enqueue_style('animate', 'https://unpkg.com/aos@2.3.1/dist/aos.css');
    wp_enqueue_style('lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/css/lightbox.min.css');

    wp_enqueue_script('fontawesome', 'https://kit.fontawesome.com/414c75fe7b.js', array(), '1.0.0', true);
    wp_enqueue_script('alpine', 'https://cdn.jsdelivr.net/npm/alpinejs@2.8.2/dist/alpine.min.js', array(), '1.0.0', true);
    wp_enqueue_script('carousel', 'https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('wow', 'https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('lightbox', 'https://cdnjs.cloudflare.com/ajax/libs/lightbox2/2.11.4/js/lightbox.min.js', array('jquery'), '1.0.0', true);
    wp_enqueue_script('script', get_template_directory_uri().'/script.js', array('jquery'), '1.0.0', true);
}
add_action( 'wp_enqueue_scripts', 'my_custom_script' );
