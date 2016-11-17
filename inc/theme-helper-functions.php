<?php



function site_logo_mobile_src() {
	return get_field( 'logotype_mobile', 'options' )['url'];
}

function site_logo_desktop_src() {
	$desktop_logo = get_field('logotype_desktop', 'options');
	if ( $desktop_logo != null && is_array( $desktop_logo ) ) {
		return $desktop_logo['url'];
	} else {
		return site_logo_mobile_src();
	}
}