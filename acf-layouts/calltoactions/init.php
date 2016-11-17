<?php
	/*
		This file will be included when a module with the name 'example' is found by ACFListener.
		All the modules fields will be available in 'get_sub_field'
		
	*/
	require_once('CallToActionsModule.php');

	$module = new CallToActionsModule();

	$blocks = get_sub_field('blocks');


	$posts = get_posts();
	$post_counter = 0;

	foreach($blocks as $block) {

		if( !$block['automatic_content']) {
			$module->addImageBlock($block['image']['url'], $block['link']);
		} else {
			$post = $posts[$post_counter++];
			$module->addTextBlock($post->post_title, 'Från floggen:', get_permalink($post->ID));
		}
	}




	$background_style = get_sub_field('background_style');
	$module->setBackgroundStyle( $background_style );
	if ( $background_style == 'image' ) {
		$module->setBackgroundImage( get_sub_field('background_image')['url']);
	}


	$module->printHTML();