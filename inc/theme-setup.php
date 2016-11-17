<?php

show_admin_bar(false);


add_action( 'after_setup_theme', 'tropse_register_menu' );
function tropse_register_menu() {
	register_nav_menu( 'primary', 'Primary Menu' );
}


add_action('wp_enqueue_scripts', 'tropse_enqueue_scripts');
function tropse_enqueue_scripts() {
	wp_enqueue_style('tropse_theme', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style('merriweather-sans', 'https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700');
	wp_enqueue_script('fontawesome', 'https://use.fontawesome.com/946de594af.js');
	wp_enqueue_script('tropse_theme', get_template_directory_uri() . '/js/script.js', array('jquery'));
}







/**
 * Disable alla wp_emojiicons since they are not used, but still loaded on every page load.
 *
 */

function disable_wp_emojicons() {

	// all actions related to emojis
	remove_action( 'admin_print_styles', 'print_emoji_styles' );
	remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
	remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
	remove_action( 'wp_print_styles', 'print_emoji_styles' );
	remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
	remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
	remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );

	// filter to remove TinyMCE emojis
	add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );






/**
 * ACF Options page.
 */


if ( function_exists( 'acf_add_options_page' ) ) {
	acf_add_options_page( array(
		'page_title' => 'Temainställningar'
	));
}







/**
 * Register posttypes
 * @link http://codex.wordpress.org/Function_Reference/register_post_type
 */

add_action( 'init', 'entertainers_posttype' );

function entertainers_posttype() {
	$labels = array(
		'name'               => 'Entertainers',
		'singular_name'      => 'Entertainer',
		'menu_name'          => 'Entertainers',
		'name_admin_bar'     => 'Entertainers',
		'add_new'            => 'Skapa ny',
		'add_new_item'       => 'Skapa ny entertainer'
	);

	$args = array(
		'labels'             => $labels,
		'description'        => 'Entertainers för tropSe',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'entertainer'),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => null,
		'taxonomies'         => array('category'),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'entertainer', $args );

}




add_action( 'init', 'tickets_posttype' );

function tickets_posttype() {
	$labels = array(
		'name'               => 'Biljetter',
		'singular_name'      => 'Biljett',
		'menu_name'          => 'Biljetter',
		'name_admin_bar'     => 'Biljetter',
		'add_new'            => 'Skapa ny',
		'add_new_item'       => 'Skapa ny biljetttyp'
	);

	$args = array(
		'labels'             => $labels,
		'description'        => 'Biljetter till Nordic Champion',
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'rewrite'            => array('slug' => 'ticket'),
		'capability_type'    => 'post',
		'has_archive'        => false,
		'hierarchical'       => true,
		'menu_position'      => null,
		'taxonomies'         => array('category'),
		'supports'           => array( 'title', 'editor', 'author', 'thumbnail', 'excerpt', 'comments' )
	);

	register_post_type( 'ticket', $args );

}



