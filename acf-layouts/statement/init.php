<?php
/*
	This file will be included when a module with the name 'example' is found by ACFListener.
	All the modules fields will be available in 'get_sub_field'

*/
require_once('StatementModule.php');

$statement = new StatementModule();

$background_style = get_sub_field('background_style');
$statement->setBackgroundStyle( $background_style );
if ( $background_style == 'image' ) {
	$statement->setBackgroundImage( get_sub_field('background_image')['url']);
}


$statement->setStatement( get_sub_field('text'));


$statement->printHTML();