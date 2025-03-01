<?php
/**
 * Custom post types
 *
 * @package wccc
 */
	

// Creating a Custom Post Type is blissfully simple ...
// Simply add your Post Types to the $cpts array.
// The first descriptor should be lowercase and plural
// The second descriptor should be singular and title case
// The third descriptor should be plural and title case     


global $cpts;

$cpts = array(
	array('services','Service','Services','dashicons-admin-network',array('title','editor','thumbnail')),
	array('testimonials','Testimonial','Testimonials','dashicons-testimonial',array('title','editor','thumbnail')),
);


function cpts_register() {

	global $cpts;
	
	foreach($cpts as $cpt){
		
		// $cpt[0] = Name
		// $cpt[1] = Singular
		// $cpt[2] = Plural
		// $cpt[3] = image / icon
		// $cpt[4] = supports

		$labels = array(
	  	'name' 					=> _x($cpt[2], 'post type general name'),
	    'singular_name' 		=> _x( $cpt[1], 'post type singular name'),
	    'add_new' 				=> _x('Add New', $cpt[0]),
	    'add_new_item' 			=> __('Add New '.$cpt[1]),
	    'edit_item' 			=> __('Edit '.$cpt[1]),
	    'new_item' 				=> __('New '.$cpt[1]),
	    'view_item' 			=> __('View '.$cpt[1]),
	    'search_items' 			=> __('Search '.$cpt[2]),
	    'not_found' 			=>  __('No '.$cpt[2].' Found'),
	    'not_found_in_trash' 	=> __('No '.$cpt[2].' Found in Trash'), 
	    'parent_item_colon' 	=> '',
	  );
	  $args = array(
	  	'labels' 				=> $labels,
	    'public' 				=> true,
	    'show_ui' 				=> true,
	    'publicly_queryable' 	=> true,
	    'query_var' 			=> true,
	    'capability_type' 		=> 'post',
	    'hierarchical' 			=> false,
	    'rewrite' 				=> true,
	    'show_in_rest' 			=> true,
	    'supports' 				=> $cpt[4],
	    'menu_icon'   			=> $cpt[3],
		);

		register_post_type($cpt[0], $args );
		
	}
}

//create Products custom post type
add_action('init', 'cpts_register');

