<?php
	/*
		This file will be included when a module with the name 'example' is found by ACFListener.
		All the modules fields will be available in 'get_sub_field'
		
	*/
	require_once('EntertainersModule.php');

	$module = new EntertainersModule();
	$entertainers = get_posts(
		array(
			'post_type' => 'entertainer'
		)
	);




	$background_style = get_sub_field('background_style');
	$module->setBackgroundStyle( $background_style );
	if ( $background_style == 'image' ) {
		$module->setBackgroundImage( get_sub_field('background_image')['url']);
	}

	$showBio = get_sub_field('show_bio');

	foreach($entertainers as $entertainer) {
		for( $i = 0;$i<10; $i++) {
			$name = $entertainer->post_title;
			$bio      = get_field('bio', $entertainer->ID);
			$image    = get_field('image', $entertainer->ID);
			$image    = $image['url'];

			$channels = get_field('channels', $entertainer->ID);
			if(is_array($channels)) {
				foreach($channels as &$channel) {
					$channel['channel_type'] = $channel['acf_fc_layout'];
					unset($channel['acf_fc_layout']);
				}
			}
			$module->addEntertainer($name, $bio, $image, $channels);
			$module->setShouldShowBio($showBio);
		}
	}


	$module->printHTML();