<?php
// Exit if accessed directly
if ( !defined( 'ABSPATH' ) ) exit;

// BEGIN ENQUEUE PARENT ACTION
// AUTO GENERATED - Do not modify or remove comment markers above or below:

if ( !function_exists( 'chld_thm_cfg_locale_css' ) ):
    function chld_thm_cfg_locale_css( $uri ){
        if ( empty( $uri ) && is_rtl() && file_exists( get_template_directory() . '/rtl.css' ) )
            $uri = get_template_directory_uri() . '/rtl.css';
        return $uri;
    }
endif;
add_filter( 'locale_stylesheet_uri', 'chld_thm_cfg_locale_css' );
         
if ( !function_exists( 'child_theme_configurator_css' ) ):
    function child_theme_configurator_css() {
        wp_enqueue_style( 'chld_thm_cfg_child', trailingslashit( get_stylesheet_directory_uri() ) . 'style.css', array( 'skt-fse-style','skt-fse-style' ) );
    }
endif;
add_action( 'wp_enqueue_scripts', 'child_theme_configurator_css', 10 );

// END ENQUEUE PARENT ACTION

// EV Setup
function programas_setup(){
	$labels = array(
		'name' => 'Programas',
		'singular_name' => 'Programa',
		'manu_name' => 'Programas'
	); 

	$args = array(
		'label'  => 'Programas', 
    'description' => 'Programas de formacion de la editorial',
    'labels'       => $labels,
    'supports'   => array('title','editor','thumbnail', 'revisions'),
    'public'    => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-welcome-learn-more',
    'can_export' => true,
    'publicly_queryable' => true,
    'rewrite'       => true,
    'show_in_rest' => true
	);
	register_post_type('Programas',$args);
}
add_action( 'init', 'programas_setup' );

function eventos_setup(){
	$labels = array(
		'name' => 'Eventos',
		'singular_name' => 'Evento',
		'manu_name' => 'Eventos'
	);

	$args = array(
		'label' => 'Eventos',
		'description' => 'Eventos academicos de la editorial',
		'labels' => $labels,
		'supports'   => array('title','editor','thumbnail', 'revisions'),
    'public'    => true,
    'show_in_menu' => true,
    'menu_position' => 5,
    'menu_icon'     => 'dashicons-calendar',
    'can_export' => true,
    'publicly_queryable' => true,
    'rewrite'       => true,
    'show_in_rest' => true
	);
	register_post_type('Evento',$args);
}
add_action('init','eventos_setup');

function skt_fse_register_block_patterns_ev() {
	$block_pattern_categories = array(
		'skt-fse' => array( 'label' => __( 'SKT FSE', 'skt-fse' ) ),
	);

	/**
	 * Filters the theme block pattern categories.
	 *
	 * @since SKT FSE 1.0
	 *
	 */
	$block_pattern_categories = apply_filters( 'skt_fse_block_pattern_categories', $block_pattern_categories );

	foreach ( $block_pattern_categories as $name => $properties ) {
		if ( ! WP_Block_Pattern_Categories_Registry::get_instance()->is_registered( $name ) ) {
			register_block_pattern_category( $name, $properties ); // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern_category
		}
	}

	$block_patterns = array(
		'skt-fse-lista-eventos',
		'skt-fse-lista-programas',
		'skt-fse-single-evento',
		'skt-fse-sobre-nosotros',
		'skt-fse-header',
		'skt-fse-hero-banner',
		'skt-fse-with-archive-title',
		'skt-fse-with-post-title',
		'skt-fse-section1',
		'skt-fse-section2',
		'skt-fse-services',
		'skt-fse-section6',
		'skt-fse-section11',
		'skt-fse-footer'
	);
	/**
	 * Filters the theme block patterns.
	 *
	 * @since SKT FSE 1.0
	 * 
	 * @param array $block_patterns List of block patterns by name.
	 *
	 */
	$block_patterns = apply_filters( 'skt_fse_block_patterns', $block_patterns );

	foreach ( $block_patterns as $block_pattern ) {
		$pattern_file = get_theme_file_path( '/includes/patterns/' . $block_pattern . '.php' );

		register_block_pattern( // phpcs:ignore WPThemeReview.PluginTerritory.ForbiddenFunctions.editor_blocks_register_block_pattern
			'skt-fse/' . $block_pattern,
			require $pattern_file // phpcs:ignore WPThemeReview.CoreFunctionality.FileInclude.FileIncludeFound
		);
	}
}
add_action( 'init', 'skt_fse_register_block_patterns_ev', 9 );

