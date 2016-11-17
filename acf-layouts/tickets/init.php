<?php
	/*
		This file will be included when a module with the name 'example' is found by ACFListener.
		All the modules fields will be available in 'get_sub_field'

	*/
	require_once('TicketsModule.php');

	$tickets = get_sub_field('tickets');

	$text = get_sub_field('text');
	$link = get_sub_field('purchase_link');

	$module = new TicketsModule($text, $link);


	$background_style = get_sub_field('background_style');
	$module->setBackgroundStyle( $background_style );
	if ( $background_style == 'image' ) {
		$module->setBackgroundImage( get_sub_field('background_image')['url']);
	}

	foreach($tickets as $ticket) {
		$name = $ticket->post_title;
		$price = get_field('price', $ticket->ID);
		$fee = get_field('service_price', $ticket->ID);
		$text = get_field('description', $ticket->ID);
		$contents = get_field('content', $ticket->ID);

		$image = get_field('image', $ticket->ID);
		$imageSource = $image['url'];

		$color = get_field('color', $ticket->ID);

		$_content = [];
		foreach($contents as $content) {
			$_content[] = $content['text'];
		}
		$contents = $_content;

		$module->addTicket($name, $price, $fee, $text, $contents, $imageSource, $color);
	}


	$module->printHTML();