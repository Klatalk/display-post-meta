<?php

function dpm_menu_bar() {

	global $wp_admin_bar;

	$args = array(
		'parent' => false,
		'id' => 'show_meta',
		'title' => __('DPM', 'text_domain'),
		'href' => '?show_meta',
		'meta' => array(
				'title' => __('RBM')
				)
		);
	$wp_admin_bar->add_menu( $args );
}
add_action( 'wp_before_admin_bar_render', 'dpm_menu_bar', 299 );