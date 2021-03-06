<?php


//use Carbon_Fields\Container;
//use Carbon_Fields\Field;
//
//add_action( 'carbon_fields_register_fields', 'crb_attach_theme_options' );
//function crb_attach_theme_options() {
//    Container::make( 'theme_options', __( 'Theme Options' ) )
//        ->add_fields( array(
//            Field::make( 'text', 'crb_text', 'Text Field' ),
//        )
//    );
//}

//add_action( 'after_setup_theme', 'mozar_setup' );
//echo '<pre>';
//var_dump(ABSPATH . 'wp-content/plugins/carbon-fields/vendor/autoload.php');
//die();
add_action( 'after_setup_theme', 'crb_load' );
function crb_load() {
    load_template( ABSPATH . 'wp-content/plugins/carbon-fields/vendor/autoload.php' );
    \Carbon_Fields\Carbon_Fields::boot();
}

add_action( 'carbon_fields_register_fields', 'mozar_register_custom_fields' );
function mozar_register_custom_fields() {
    require get_template_directory() . '/includes/custom-fields-options/metabox.php';
    require get_template_directory() . '/includes/custom-fields-options/theme-options.php';
}
/**
 * include theme settings
 */
require get_template_directory() . '/includes/theme-settings.php';

/**
 * include widget area
 */
require get_template_directory() . '/includes/widget-areas.php';

/**
 * include script and style
 */
require get_template_directory() . '/includes/enqueue-script-style.php';



/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/includes/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/includes/template-tags.php';

/**
 * Theme helper functions.
 */
require get_template_directory() . '/includes/helpers.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/includes/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/includes/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/includes/jetpack.php';
}

/**
 * Load WooCommerce compatibility file.
 */
if ( class_exists( 'WooCommerce' ) ) {
	require get_template_directory() . '/includes/woocommerce.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions.php';
	require get_template_directory() . '/woocommerce/includes/wc-functions-remove.php';
}

