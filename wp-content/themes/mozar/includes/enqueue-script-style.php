<?php


if (!defined('ABSPATH')) {
    exit; // Exit if accessed directly
}

/**
 * Enqueue scripts and styles.
 */
add_action( 'wp_enqueue_scripts', 'mozar_scripts' );
function mozar_styles() {
    $theme_version = wp_get_theme()->get( 'Version' );

    wp_enqueue_style('mozar-style', get_stylesheet_uri());
}

add_action( 'wp_enqueue_scripts', 'mozar_scripts' );
function mozar_scripts() {
    $theme_version = wp_get_theme()->get( 'Version' );
    wp_enqueue_script( 'mozar-navigation', get_template_directory_uri() . '/assets/js/navigation.js', array(), $theme_version, true );
    wp_enqueue_script( 'mozar-skip-link-focus-fix', get_template_directory_uri() . '/assets/js/skip-link-focus-fix.js', array(), $theme_version, true );

    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
        wp_enqueue_script( 'comment-reply' );
    }
}
