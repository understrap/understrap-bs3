<?php
/**
 * understrap Theme Customizer
 *
 * @package understrap-bs3
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function understrap_bs3_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

}
add_action( 'customize_register', 'understrap_bs3_customize_register' );

function understrap_bs3_theme_customize_register( $wp_customize ) {

    $wp_customize->add_section( 'understrap_bs3_theme_slider_options', array(
        'title'          => __( 'Slider Settings', 'understrap-bs3' )
    ) );

    $wp_customize->add_setting( 'understrap_bs3_theme_slider_count_setting', array(
        'default'        => '1',
        'sanitize_callback' => 'esc_textarea'
    ) );

    $wp_customize->add_control( 'understrap_bs3_theme_slider_count', array(
        'label'      => __( 'Number of slides displaying at once', 'understrap-bs3' ),
        'section'    => 'understrap_bs3_theme_slider_options',
        'type'       => 'text',
        'settings'   => 'understrap_bs3_theme_slider_count_setting'
    ) );

    $wp_customize->add_setting( 'understrap_bs3_theme_slider_time_setting', array(
        'default'        => '5000',
        'sanitize_callback' => 'esc_textarea'
    ) );

    $wp_customize->add_control( 'understrap_bs3_theme_slider_time', array(
        'label'      => __( 'Slider Time (in ms)', 'understrap-bs3' ),
        'section'    => 'understrap_bs3_theme_slider_options',
        'type'       => 'text',
        'settings'   => 'understrap_bs3_theme_slider_time_setting'
    ) );


}
add_action( 'customize_register', 'understrap_bs3_theme_customize_register' );



/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function understrap_bs3_customize_preview_js() {
	wp_enqueue_script( 'understrap_bs3_customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20130508', true );
}
add_action( 'customize_preview_init', 'understrap_bs3_customize_preview_js' );
