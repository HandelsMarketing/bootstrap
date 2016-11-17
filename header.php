<?php
/**
 * The template for displaying the header
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div id="menu">
	<div class="menu__logo">
		<div class="menu__logo--mobile">
			<img src="<?= site_logo_mobile_src() ?>">
		</div><div class="menu__logo--desktop">
			<img src="<?= site_logo_desktop_src() ?>">
		</div>
	</div>
	<div class="menu__trigger js-menu-trigger"><i class="fa fa-bars"></i></div>
	<div class="menu__holder">
		<div class="menu__holder-table">
		<?php
		wp_nav_menu( array(
			'theme_location' => 'primary',
			'menu_class'     => 'primary-menu',
		) );
		?>
		</div>
	</div>

</div>

