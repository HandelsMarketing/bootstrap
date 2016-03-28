<?php
	/*
		This file will be included when a module with the name 'example' is found by ACFListener.
		All the modules fields will be available in 'get_sub_field'
		
	*/
	require_once('ACF_Example.php');

	$example = new ACF_Example();

	$example->foo = get_sub_field('foo');
	$example->bar = get_sub_field('bar');


	$example->printHTML();