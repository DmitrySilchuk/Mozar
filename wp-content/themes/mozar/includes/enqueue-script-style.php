<?php


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'mozar_styles' );
function mozar_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('mozar-style', get_stylesheet_uri(), ['bootstrap-style'], null, 'all');
    wp_enqueue_style('bootstrap-style', get_template_directory_uri() . '/assets/css/bootstrap.min.css', [], null, 'all');
    wp_enqueue_style('animate-style', get_template_directory_uri() . '/assets/css/animate.css', [], null, 'all');
    wp_enqueue_style('font-awesome-style', get_template_directory_uri() . '/assets/css/font-awesome.min.css', [], null, 'all');
    wp_enqueue_style('jquery-ui-style', get_template_directory_uri() . '/assets/css/jquery-ui.css', [], null, 'all');
    wp_enqueue_style('mean-menu-style', get_template_directory_uri() . '/assets/css/meanmenu.min.css', [], null, 'all');
    wp_enqueue_style('owl-carousel-style', get_template_directory_uri() . '/assets/css/owl.carousel.css', [], null, 'all');
    wp_enqueue_style('responsive-style', get_template_directory_uri() . '/assets/css/responsive.css', [], null, 'all');
}

add_action( 'wp_enqueue_scripts', 'mozar_scripts' );
function mozar_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_script( 'modernizr-script', get_template_directory_uri() . '/assets/js/vendor/modernizr-2.8.3.min.js', [], $theme_version);
    wp_enqueue_script( 'navigation-script', get_template_directory_uri() . '/assets/js/navigation.js', [], $theme_version);
    wp_enqueue_script( 'skip-link-focus-fix-script', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', [], $theme_version);
    wp_enqueue_script( 'bootstrap-script', get_template_directory_uri() . '/assets/js/bootstrap.min.js', [], $theme_version);
//    wp_enqueue_script( 'customizer-script', get_template_directory_uri() . '/assets/js/customizer.js', [], $theme_version);
    wp_enqueue_script( 'jquery-countdown-script', get_template_directory_uri() . '/assets/js/jquery.countdown.min.js', [], $theme_version);
    wp_enqueue_script( 'jquery-elevate-zoom-script', get_template_directory_uri() . '/assets/js/jquery.elevateZoom-3.0.8.min.js', [], $theme_version);
    wp_enqueue_script( 'jquery-mean-menu-script', get_template_directory_uri() . '/assets/js/jquery.meanmenu.js', [], $theme_version);
    wp_enqueue_script( 'jquery-scroll-up-script', get_template_directory_uri() . '/assets/js/jquery.scrollUp.min.js', [], $theme_version);
    wp_enqueue_script( 'jquery-sticky-script', get_template_directory_uri() . '/assets/js/jquery.sticky.js', [], $theme_version);
    wp_enqueue_script( 'jquery-price-slider-script', get_template_directory_uri() . '/assets/js/jquery-price-slider.js', [], $theme_version);
    wp_enqueue_script( 'main-script', get_template_directory_uri() . '/assets/js/main.js', [], $theme_version, true);
    wp_enqueue_script( 'owl-carousel-script', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', [], $theme_version);
    wp_enqueue_script( 'plugins-script', get_template_directory_uri() . '/assets/js/plugins.js', [], $theme_version);
    wp_enqueue_script( 'wow-script', get_template_directory_uri() . '/assets/js/wow.min.js', [], $theme_version );
//    wp_enqueue_script( 'jquery-script', get_template_directory_uri() . '/assets/js/vendor/jquery-1.11.3.min.js', [], $theme_version, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
