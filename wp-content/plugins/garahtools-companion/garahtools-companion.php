<?php

/*
Plugin Name: Garah Tools Companion
Plugin URI: https://garahtools.com/
Description: Simple but flexible.
Author: Md Abu Musa
Author URI: https://ehalum.com/
License: GPLv2 or later
Text Domain: garantools-companion
Domain Path: /languages/
Version: 1.0.0
*/


function garahtools_companion_load_text_domain()
{
	load_plugin_textdomain('garahtools-companion', false, dirname(__FILE__) . '/languages');
}

add_action('plugin_loaded', 'garahtools_companion_load_text_domain');


function garahtools_companion_register_my_cpts()
{

	/**
	 * Post Type: Sliders.
	 */

	$labels = [
		"name" => __("Sliders", "garahtools-companion"),
		"singular_name" => __("Slider", "garahtools-companion"),
	];

	$args = [
		"label" => __("Sliders", "garahtools-companion"),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "slider", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-admin-collapse",
		"supports" => ["title", "editor", "thumbnail"],
		"show_in_graphql" => false,
	];

	register_post_type("slider", $args);


	/**
	 * Post Type: Section.
	 */

	$labels = [
		"name" => __("Sections", "garahtools"),
		"singular_name" => __("Section", "garahtools"),
	];

	$args = [
		"label" => __("Section", "garahtools"),
		"labels" => $labels,
		"description" => "",
		"public" => false,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"has_archive" => false,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"rewrite" => ["slug" => "section", "with_front" => true],
		"query_var" => true,
		"menu_icon" => "dashicons-welcome-widgets-menus",
		"supports" => ["title", "editor", "thumbnail"],
		"show_in_graphql" => false,
	];

	register_post_type("section", $args);
}

add_action('init', 'garahtools_companion_register_my_cpts');
