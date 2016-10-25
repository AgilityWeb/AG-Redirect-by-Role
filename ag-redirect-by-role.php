<?php
/*
Plugin Name: AG Redirect Users by Role
Plugin URI:
Description: Redirects users based on their role
Version: 1.0
Author: C Kennerdale
Author URI: http://agilityweb.co.uk
License: GPLv2 or later
*/
 

function ag_redirect_users_by_role() {
 
    if ( ! defined( 'DOING_AJAX' ) ) {
 
        $current_user   = wp_get_current_user();
        $role_name      = $current_user->roles[0];
 
        if ( 'subscriber' === $role_name ) {
            wp_redirect( 'subscriber' ); // Page to redirect to
        } // if $role_name
		
		if ( 'diploma' === $role_name ) {
            wp_redirect( 'diploma' ); // Page to redirect to
        } // if $role_name
		
		if ( 'certificate' === $role_name ) {
            wp_redirect( 'certificate' ); // Page to redirect to
        } // if $role_name
 
    } // if DOING_AJAX
 
} // cm_redirect_users_by_role
add_action( 'admin_init', 'ag_redirect_users_by_role' ); 

?>