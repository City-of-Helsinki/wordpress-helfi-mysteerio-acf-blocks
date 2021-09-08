<?php
/**
 * Plugin name: Mysteerio ACF Blocks
 * Author: Mysteerio
 * Version: 1.1.0
 */

 // Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

function carousel_register_acf_gutenberg_blocks() {
	if ( function_exists( 'acf_register_block' ) ) {
		// Register the hero block.
		acf_register_block(array(
			'name'            => 'concepts',
			'title'           => __( 'Front Page Consept Grid', 'mysteerio' ),
			'description'     => __( 'A Grid to display Consepts', 'mysteerio' ),
			'render_template' => plugin_dir_path(__FILE__) . '/template-parts/concepts.php',
			'category'        => 'layout',
			'icon'            => 'slides',
			'mode'            => 'preview',
            'keywords'        => array( 'consepts', 'grid' ),
            'enqueue_style'     => plugin_dir_url(__FILE__) . 'css/concepts.css',
			'enqueue_script'    => plugins_url('js/concepts.js', __FILE__)
		));

		acf_register_block(array(
			'name'            => 'imgpara',
			'title'           => __( 'Image and paragraph', 'mysteerio' ),
			'description'     => __( 'Paragraph with image on side', 'mysteerio' ),
			'render_template' => plugin_dir_path(__FILE__) . '/template-parts/imgpara.php',
			'category'        => 'layout',
			'icon'            => 'slides',
			'mode'            => 'preview',
            'keywords'        => array( 'paragraph', 'image', 'column' ),
            'enqueue_style'     => plugin_dir_url(__FILE__) . 'css/imgpara.css',
			'enqueue_script'    => plugins_url('js/imgpara.js', __FILE__)
		));

		acf_register_block(array(
			'name'            => 'iconlift',
			'title'           => __( 'Icon lift', 'mysteerio' ),
			'description'     => __( 'Icons, titles and small excerpt', 'mysteerio' ),
			'render_template' => plugin_dir_path(__FILE__) . '/template-parts/iconlift.php',
			'category'        => 'layout',
			'icon'            => 'slides',
			'mode'            => 'preview',
            'keywords'        => array( 'icon', 'lift', 'column' ),
            'enqueue_style'     => plugin_dir_url(__FILE__) . 'css/iconlift.css',
			'enqueue_script'    => plugins_url('js/iconlift.js', __FILE__)
		));

		acf_register_block(array(
			'name'            => 'pilotessential',
			'title'           => __( 'Pilot essential lift', 'mysteerio' ),
			'description'     => __( 'Pilot essential lift', 'mysteerio' ),
			'render_template' => plugin_dir_path(__FILE__) . '/template-parts/pilotessential.php',
			'category'        => 'layout',
			'icon'            => 'slides',
			'mode'            => 'preview',
            'keywords'        => array( 'icon', 'lift', 'column' ),
            'enqueue_style'     => plugin_dir_url(__FILE__) . 'css/pilotessential.css'
		));

		acf_register_block(array(
			'name'            => 'heroarrow',
			'title'           => __( 'Arrow down for Hero', 'mysteerio' ),
			'description'     => __( 'Arrow down for Hero', 'mysteerio' ),
			'render_template' => plugin_dir_path(__FILE__) . '/template-parts/heroarrow.php',
			'category'        => 'layout',
			'icon'            => 'slides',
			'mode'            => 'preview',
            'keywords'        => array( 'hero', 'arrow', 'down' ),
            'enqueue_style'     => plugin_dir_url(__FILE__) . 'css/heroarrow.css'
		));
		acf_register_block(array(
			'name'            => 'squares',
			'title'           => __( 'Responsive squares', 'mysteerio' ),
			'description'     => __( 'Responsive squares', 'mysteerio' ),
			'render_template' => plugin_dir_path(__FILE__) . '/template-parts/squares.php',
			'category'        => 'layout',
			'icon'            => 'slides',
			'mode'            => 'preview',
            'keywords'        => array( 'hero', 'arrow', 'down' ),
            'enqueue_style'     => plugin_dir_url(__FILE__) . 'css/squares.css'
		));

		acf_register_block(array(
			'name'            => 'resources',
			'title'           => __( 'Resources', 'mysteerio' ),
			'description'     => __( 'Downloadable documents and links', 'mysteerio' ),
			'render_template' => plugin_dir_path(__FILE__) . '/template-parts/resources.php',
			'category'        => 'layout',
			'icon'            => 'slides',
			'mode'            => 'preview',
            'keywords'        => array( 'icon', 'lift', 'column' ),
            'enqueue_style'     => plugin_dir_url(__FILE__) . 'css/resources.css',
			'enqueue_script'    => plugins_url('js/resources.js', __FILE__)
		));
	}
}
add_action( 'acf/init', 'carousel_register_acf_gutenberg_blocks' );
