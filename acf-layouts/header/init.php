<?php
/*
	This file will be included when a module with the name 'header' is found by ACFListener.
	All the modules fields will be available in 'get_sub_field'

*/
require_once( 'HeaderModule.php' );

$header = new HeaderModule();


if ( get_sub_field( 'heading' ) ) {
	$header->setHeading( get_sub_field('heading'));
}

if ( get_sub_field( 'subheading' ) ) {
	$header->setSubHeading( get_sub_field('subheading'));
}


$background_type = get_sub_field('background_type');
$header->setBackgroundType( $background_type);


if ( $background_type == 'video' ) {
	$header->setVideoRatio( get_sub_field( 'video_ratio' ) );
	$header->setVideoPlaybackFinishedImage( get_sub_field('video_ending_image')['url']);
} else if ( $background_type == 'image' ) {
	$header->setBackgroundImage( get_sub_field( 'background_image')['url']);
}






$header->printHTML();