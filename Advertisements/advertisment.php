<?php
/**
 * Advertisements
 *
 * @package       GZ Advertisements
 * @author        Josh Slone
 *
 * @wordpress-plugin
 * Plugin Name:   GZ Advertisements
 * Plugin URI:    https://greenzebramedia.com
 * Description:   Provides advertising capabilities to your multi-page experience.
 * Version:       1.01
 * Author:        Josh Slone 
 * Author URI:    https://joshuaslone.com/
 * Update URI:    https://joshuaslone.com/
 * Text Domain:   gzadvertisements
 * Domain Path:   /lang
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

add_action( 'init', function() {
	register_post_type( 'desktop-ad', array(
	'labels' => array(
		'name' => 'Desktop Advertisements',
		'singular_name' => 'Desktop Advertisement',
		'menu_name' => 'ADS Desktop',
		'all_items' => 'All Desktop Advertisements',
		'edit_item' => 'Edit Advertisement',
		'view_item' => 'View Advertisement',
		'view_items' => 'View Advertisements',
		'add_new_item' => 'Add New Advertisement',
		'new_item' => 'New Advertisement',
		'parent_item_colon' => 'Parent Advertisement:',
		'search_items' => 'Search Advertisements',
		'not_found' => 'No Advertisements found',
		'not_found_in_trash' => 'No Advertisements found in Trash',
		'archives' => 'Advertisement Archives',
		'attributes' => 'Advertisement Attributes',
		'insert_into_item' => 'Insert into Advertisement',
		'uploaded_to_this_item' => 'Uploaded to this Advertisement',
		'filter_items_list' => 'Filter Advertisement list',
		'filter_by_date' => 'Filter Advertisements by date',
		'items_list_navigation' => 'Advertisements list navigation',
		'items_list' => 'Advertisements list',
		'item_published' => 'Advertisement published.',
		'item_published_privately' => 'Advertisement published privately.',
		'item_reverted_to_draft' => 'Advertisement reverted to draft.',
		'item_scheduled' => 'Advertisement scheduled.',
		'item_updated' => 'Advertisement updated.',
		'item_link' => 'Advertisement Link',
		'item_link_description' => 'A link to a Advertisement.',
	),
	'description' => 'Place your Advertisement image',
	'public' => true,
	'hierarchical' => true,
	'exclude_from_search' => true,
	'show_in_rest' => true,
	'menu_position' => 4,
	'menu_icon' => 'dashicons-desktop',
	'supports' => array(
		0 => 'title',
		1 => 'editor',
		2 => 'thumbnail',
	),
	'delete_with_user' => false,
) );

	register_post_type( 'mobile-advertisement', array(
	'labels' => array(
		'name' => 'Mobile Advertisements',
		'singular_name' => 'Mobile Advertisement',
		'menu_name' => 'ADs Mobile',
		'all_items' => 'All Mobile Advertisements',
		'edit_item' => 'Edit Mobile Advertisement',
		'view_item' => 'View Mobile Advertisement',
		'view_items' => 'View Mobile Advertisements',
		'add_new_item' => 'Add New Mobile Advertisement',
		'new_item' => 'New Mobile Advertisement',
		'parent_item_colon' => 'Parent Mobile Advertisement:',
		'search_items' => 'Search Mobile Advertisements',
		'not_found' => 'No mobile advertisements found',
		'not_found_in_trash' => 'No mobile advertisements found in Trash',
		'archives' => 'Mobile Advertisement Archives',
		'attributes' => 'Mobile Advertisement Attributes',
		'insert_into_item' => 'Insert into mobile advertisement',
		'uploaded_to_this_item' => 'Uploaded to this mobile advertisement',
		'filter_items_list' => 'Filter mobile advertisements list',
		'filter_by_date' => 'Filter mobile advertisements by date',
		'items_list_navigation' => 'Mobile Advertisements list navigation',
		'items_list' => 'Mobile Advertisements list',
		'item_published' => 'Mobile Advertisement published.',
		'item_published_privately' => 'Mobile Advertisement published privately.',
		'item_reverted_to_draft' => 'Mobile Advertisement reverted to draft.',
		'item_scheduled' => 'Mobile Advertisement scheduled.',
		'item_updated' => 'Mobile Advertisement updated.',
		'item_link' => 'Mobile Advertisement Link',
		'item_link_description' => 'A link to a mobile advertisement.',
	),
	'description' => 'Place your Advertisement image',
	'public' => true,
	'hierarchical' => true,
	'exclude_from_search' => true,
	'show_in_rest' => true,
	'menu_position' => 4,
	'menu_icon' => 'dashicons-smartphone',
	'supports' => array(
		0 => 'title',
		1 => 'editor',
		2 => 'thumbnail',
	),
	'delete_with_user' => false,
) );
} );

