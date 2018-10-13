<?php 
/*Plugin Name: Create Book Post Type
Description: This plugin registers the 'book' post type.
Version: 1.0
License: GPLv2
*/

// register custom post type to work with
function create_book_post_type() {
	// set up labels
	$labels = array(
 		'name' => 'Books',
    	'singular_name' => 'Book',
    	'add_new' => 'Add New Book',
    	'add_new_item' => 'Add New Book',
    	'edit_item' => 'Edit Book',
    	'new_item' => 'New Book',
    	'all_items' => 'All Books',
    	'view_item' => 'View Book',
    	'search_items' => 'Search Books',
    	'not_found' =>  'No Books Found',
    	'not_found_in_trash' => 'No Books found in Trash', 
    	'parent_item_colon' => '',
    	'menu_name' => 'Books',
    );
    //register post type
	register_post_type( 'book', array(
		'labels' => $labels,
		'has_archive' => true,
 		'public' => true,
		'supports' => array( 'title', 'editor', 'excerpt', 'custom-fields', 'thumbnail','page-attributes' ),
		'taxonomies' => array( 'post_tag', 'category' ),	
		'exclude_from_search' => false,
		'capability_type' => 'post',
		'rewrite' => array( 'slug' => 'products' ),
		)
	);
}
add_action( 'init', 'create_book_post_type' );
?>