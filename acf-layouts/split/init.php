<?php
	/*
		This file will be included when a module with the name 'example' is found by ACFListener.
		All the modules fields will be available in 'get_sub_field'
		
	*/
	require_once('SplitModule.php');


	$text = get_sub_field('text');
	$image = get_sub_field('image');
	$imageSource = $image['url'];
	$imagePosition = get_sub_field('image_position');


	$module = new SplitModule($text, $imageSource, $imagePosition);




	$background_style = get_sub_field('background_style');
	$module->setBackgroundStyle( $background_style );
	if ( $background_style == 'image' ) {
		$module->setBackgroundImage( get_sub_field('background_image')['url']);
	}


	$module->printHTML();