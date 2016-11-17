<?php
/*
	This file will be included when a module with the name 'example' is found by ACFListener.
	All the modules fields will be available in 'get_sub_field'

*/
require_once('CountdownModule.php');



$title = get_sub_field('title');
$location_specific = get_sub_field('location_fine');
$location_coarse = get_sub_field('location_coarse');
$date = strtotime(sprintf("%s %d:%d", get_sub_field('date'), get_sub_field('hours'), get_sub_field('minutes')));

$module = new CountdownModule($date, $title, $location_specific, $location_coarse);

$background_style = get_sub_field('background_style');
$module->setBackgroundStyle( $background_style );
if ( $background_style == 'image' ) {
	$module->setBackgroundImage( get_sub_field('background_image')['url']);
}



$module->printHTML();