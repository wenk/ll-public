<?php
function cptui_register_my_cpts_artwork() {

	/**
	 * Post Type: Artworks.
	 */

	$labels = [
		"name" => esc_html__( "Artworks", "kadence" ),
		"singular_name" => esc_html__( "Artwork", "kadence" ),
		"menu_name" => esc_html__( "Artworks", "kadence" ),
		"all_items" => esc_html__( "All Artworks", "kadence" ),
		"add_new" => esc_html__( "Add new", "kadence" ),
		"add_new_item" => esc_html__( "Add new Artwork", "kadence" ),
		"edit_item" => esc_html__( "Edit Artwork", "kadence" ),
		"new_item" => esc_html__( "New Artwork", "kadence" ),
		"view_item" => esc_html__( "View Artwork", "kadence" ),
		"view_items" => esc_html__( "View Artworks", "kadence" ),
		"search_items" => esc_html__( "Search Artworks", "kadence" ),
		"not_found" => esc_html__( "No Artworks found", "kadence" ),
		"not_found_in_trash" => esc_html__( "No Artworks found in trash", "kadence" ),
		"parent" => esc_html__( "Parent Artwork:", "kadence" ),
		"featured_image" => esc_html__( "Featured image for this Artwork", "kadence" ),
		"set_featured_image" => esc_html__( "Set featured image for this Artwork", "kadence" ),
		"remove_featured_image" => esc_html__( "Remove featured image for this Artwork", "kadence" ),
		"use_featured_image" => esc_html__( "Use as featured image for this Artwork", "kadence" ),
		"archives" => esc_html__( "Artwork archives", "kadence" ),
		"insert_into_item" => esc_html__( "Insert into Artwork", "kadence" ),
		"uploaded_to_this_item" => esc_html__( "Upload to this Artwork", "kadence" ),
		"filter_items_list" => esc_html__( "Filter Artworks list", "kadence" ),
		"items_list_navigation" => esc_html__( "Artworks list navigation", "kadence" ),
		"items_list" => esc_html__( "Artworks list", "kadence" ),
		"attributes" => esc_html__( "Artworks attributes", "kadence" ),
		"name_admin_bar" => esc_html__( "Artwork", "kadence" ),
		"item_published" => esc_html__( "Artwork published", "kadence" ),
		"item_published_privately" => esc_html__( "Artwork published privately.", "kadence" ),
		"item_reverted_to_draft" => esc_html__( "Artwork reverted to draft.", "kadence" ),
		"item_trashed" => esc_html__( "Artwork trashed.", "kadence" ),
		"item_scheduled" => esc_html__( "Artwork scheduled", "kadence" ),
		"item_updated" => esc_html__( "Artwork updated.", "kadence" ),
		"parent_item_colon" => esc_html__( "Parent Artwork:", "kadence" ),
	];

	$args = [
		"label" => esc_html__( "Artworks", "kadence" ),
		"labels" => $labels,
		"description" => "",
		"public" => true,
		"publicly_queryable" => true,
		"show_ui" => true,
		"show_in_rest" => true,
		"rest_base" => "",
		"rest_controller_class" => "WP_REST_Posts_Controller",
		"rest_namespace" => "wp/v2",
		"has_archive" => true,
		"show_in_menu" => true,
		"show_in_nav_menus" => true,
		"delete_with_user" => false,
		"exclude_from_search" => false,
		"capability_type" => "post",
		"map_meta_cap" => true,
		"hierarchical" => false,
		"can_export" => false,
		"rewrite" => [ "slug" => "artwork", "with_front" => false ],
		"query_var" => false,
		"supports" => [ "title", "editor", "thumbnail", "excerpt" ],
		"taxonomies" => [ "category", "post_tag" ],
		"show_in_graphql" => false,
	];

	register_post_type( "artwork", $args );
}

add_action( 'init', 'cptui_register_my_cpts_artwork' );
