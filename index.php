<?php
/**
 * The main template file
 */

get_header();


/*
 * 'flex_example' refer to the *ID* of the Flexible Content field.
 * All layouts in the given field will have their init.php file included.
 */

ACFListener::fields('modules');





/*

	TODO

*/
get_footer(); ?>
