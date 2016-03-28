<?php
	require_once('ACF_Example.php');


	$example = new ACF_Example();

	$example->foo = get_sub_field('foo');
	$example->bar = get_sub_field('bar');


	$example->printHTML();