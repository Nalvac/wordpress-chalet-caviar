<?php
/**
 * Theme Customizer
 *
 * @package Holiday_Cottage
 */

/**
 * Customizer configuration.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function holiday_cottage_customize_register( $wp_customize ) {
	// Load custom controls.
	require trailingslashit( get_template_directory() ) . 'inc/customizer/control.php';

	// Load customizer partials callback.
	require trailingslashit( get_template_directory() ) . 'inc/customizer/partials.php';

	// Load customize sanitize.
	require trailingslashit( get_template_directory() ) . 'inc/customizer/sanitize.php';

	// Register custom controls and sections.
	$wp_customize->register_control_type( 'Holiday_Cottage_Heading_Control' );
	$wp_customize->register_control_type( 'Holiday_Cottage_Message_Control' );
	$wp_customize->register_section_type( 'Holiday_Cottage_Customize_Section_Upsell' );

	$wp_customize->get_setting( 'blogname' )->transport        = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'holiday_cottage_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'holiday_cottage_customize_partial_blogdescription',
			)
		);
	}

	// Load customize option.
	require get_template_directory() . '/inc/customizer/option.php';
}

add_action( 'customize_register', 'holiday_cottage_customize_register' );

/**
 * Customizer scripts and styles.
 *
 * @since 1.0.0
 */
function holiday_cottage_customizer_control_scripts() {
	$min = defined( 'SCRIPT_DEBUG' ) && SCRIPT_DEBUG ? '' : '.min';
	wp_enqueue_script( 'holiday-cottage-customize-controls', get_template_directory_uri() . '/js/customize-controls' . $min . '.js', array( 'customize-controls' ), HOLIDAY_COTTAGE_VERSION, true );
	wp_enqueue_style( 'holiday-cottage-customize-controls', get_template_directory_uri() . '/css/customize-controls' . $min . '.css', '', HOLIDAY_COTTAGE_VERSION );
}

add_action( 'customize_controls_enqueue_scripts', 'holiday_cottage_customizer_control_scripts', 0 );
