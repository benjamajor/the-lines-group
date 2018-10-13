<?php 
/*Plugin Name: Create Book Category Taxonomy
Description: This plugin registers the 'book category' taxonomy and applies it to the 'product' post type.
Version: 1.0
License: GPLv2
*/


function register_book_taxonomy() {
	// set up labels
	$labels = array(
		'name'              => 'Book Genres',
		'singular_name'     => 'Book Genre',
		'search_items'      => 'Search Book Genres',
		'all_items'         => 'All Book Genres',
		'edit_item'         => 'Edit Book Genre',
		'update_item'       => 'Update Book Genre',
		'add_new_item'      => 'Add New Book Genre',
		'new_item_name'     => 'New Book Genre',
		'menu_name'         => 'Book Genres'
	);
	// register taxonomy
	register_taxonomy( 'bookcat', 'book', array(
		'hierarchical' => true,
		'labels' => $labels,
		'query_var' => true,
		'show_admin_column' => true
	) );
}
add_action( 'init', 'register_book_taxonomy' );
?>