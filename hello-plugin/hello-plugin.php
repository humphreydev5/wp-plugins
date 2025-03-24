<?php

/**
 * Pluhin Name: Hello Plugin
 * Desccription: This is a simple plugin that displays a message on the admin dashboard and create an imformation widgets
 * Author: Humphrey Ikhalea
 * Version: 1.0
 * Author URI: https://www.linkedin.com/in/humphreydev/
 * Plugin URL: https://example.com/helo-plugin
 */


 // Admin Notices
 add_action("admin_notices", "how_show_success_message");

 function how_show_success_message(){
	echo '<div class="notice notice-success is-dismissible"><p>Hello, this is a success message</p></div>';
 }
 function how_show_information_message(){
	echo '<div class="notice notice-info is-dismissible"><p>Hello, this is an info message</p></div>';
 }
 function how_show_warning_message(){
	echo '<div class="notice notice-warning is-dismissible"><p>Hello, this is a warning message</p></div>';
 }
 function how_show_error_message(){
	echo '<div class="notice notice-error is-dismissible"><p>Hello, this is a error message</p></div>';
 }

 //Admin Dashboard Widget
 add_action("wp_dashboard_setup", "how_hello_plugin_dashboard_widget");

 function how_hello_plugin_dashboard_widget(){
	wp_add_dashboard_widget("how_hello_world", "HW - Hello World Widget", "hw_custom_admin_widget");
 }

 function hw_custom_admin_widget(){
	echo "This is Hello World Custom Admin Widget";
 }