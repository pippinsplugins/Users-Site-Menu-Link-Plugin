<?php
/*
 * Plugin Name: Users Site Menu Link
 * Description: Adds a link to the Users management page to the site's toolbar admin menu
 * Author: Pippin Williamson
 * Author URI: http://pippinsplugins.com
 * Version: 1.0
 */


function pw_users_site_menu_link( $wp_admin_bar ) {

	if( is_admin() || ! current_user_can( 'edit_users' ) ) {
		return;
	}

	$args = array(
		'parent' => 'site-name',
		'id'     => 'users',
		'title'  => __( 'Users' ),
		'href'   => admin_url( 'users.php' )
	);
	$wp_admin_bar->add_node( $args );
}
add_action( 'admin_bar_menu', 'pw_users_site_menu_link', 999 );