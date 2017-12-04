<?php
/**
 * Plugin Name: Admin Sticky Widget Areas
 * Plugin URI: https://github.com/srikat/Admin-Sticky-Widget-Areas
 * Description: A simple plugin to make the widget areas on the right side at /wp-admin/widgets.php sticky so they always remain in view when scrolling up/down.
 * Version: 1.0.0
 * Author: Sridhar Katakam
 * Author URI: https://sridharkatakam.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * GitHub Plugin URI: srikat/Admin-Sticky-Widget-Areas
 *
 * This program is free software; you can redistribute it and/or modify it under the terms of the GNU
 * General Public License version 2, as published by the Free Software Foundation.  You may NOT assume
 * that you can use any other version of the GPL.
 *
 * This program is distributed in the hope that it will be useful, but WITHOUT ANY WARRANTY; without
 * even the implied warranty of MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.
 *
 */

if ( ! defined( 'WPINC' ) ) {
	die;
}

add_action( 'admin_enqueue_scripts', 'custom_admin_widgets_stylesheet' );
/**
 * Load style.css on the WordPress widgets page in the backend.
 */
function custom_admin_widgets_stylesheet() {
	if ( 'widgets.php' !== $hook ) {
		return;
	}

	wp_enqueue_style( 'widgets-page-styles', plugin_dir_url( __FILE__ ) . 'assets/css/style.css' );
}
