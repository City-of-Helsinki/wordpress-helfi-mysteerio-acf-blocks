<?php
/**
 * Plugin name: Mysteerio ACF Blocks
 * Author: Mysteerio
 * Version: 1.2.0
 */

 // Exit if accessed directly.
if ( !defined( 'ABSPATH' ) ) {
    exit;
}

add_action( 'enqueue_block_assets', 'mysteerio_block_assets' );
function mysteerio_block_assets(): void {
	$blocks = array(
		'concepts',
		'imgpara',
		'iconlift',
		'pilotessential',
		'heroarrow',
		'squares',
		'resources',
	);

	$base_url = plugin_dir_url( __FILE__ );

	foreach ( $blocks as $block ) {
		wp_register_style(
			'block-' . $block,
			sprintf( '%scss/%s.css', $base_url, $block )
		);
	}
}

function carousel_register_acf_gutenberg_blocks() {
	if ( function_exists( 'acf_register_block' ) ) {

		add_filter( 'acf/blocks/default_block_version', fn() => 3 );

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
			'enqueue_assets' => fn() => wp_enqueue_style( 'block-concepts' ),
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
			'enqueue_assets' => fn() => wp_enqueue_style( 'block-imgpara' ),
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
			'enqueue_assets' => fn() => wp_enqueue_style( 'block-iconlift' ),
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
			'enqueue_assets' => fn() => wp_enqueue_style( 'block-pilotessential' ),
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
			'enqueue_assets' => fn() => wp_enqueue_style( 'block-heroarrow' ),
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
			'enqueue_assets' => fn() => wp_enqueue_style( 'block-squares' ),
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
			'enqueue_assets' => fn() => wp_enqueue_style( 'block-resources' ),
		));
	}
}
add_action( 'acf/init', 'carousel_register_acf_gutenberg_blocks' );
