<?php
/**
 * UF HWCOE Child theme functions and definitions.
*
*/

function hwcoe_ufl_child_scripts() {
	
	//enqueue parent stylesheet
	$parent_style = 'hwcoe-ufl-style'; 

	wp_enqueue_style( $parent_style, 
		get_template_directory_uri() . '/style.css', 
		['bootstrap', 'prettyPhoto'],
		wp_get_theme('hwcoe-ufl')->get('Version')
	);

	wp_enqueue_style( 'hwcoe-ufl-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		array( $parent_style ),
		get_theme_version() 
	);
	
	wp_enqueue_script('mixitup', get_stylesheet_directory_uri() . '/js/mixitup.min.js', array(), get_theme_version(), true);
	
	wp_enqueue_script('hwcoe-ufl-child-scripts', get_stylesheet_directory_uri() . '/scripts.js', array(), get_theme_version(), true);
		
}
add_action( 'wp_enqueue_scripts', 'hwcoe_ufl_child_scripts' );

// Custom Function to Include
if ( !function_exists( 'hwcoe_ufl_child_icon_url' ) ) {

	function hwcoe_ufl_child_icon_url() {
		if ( empty($url) ){
			$url = get_stylesheet_directory_uri() . '/favicon.png';
		}
		return $url;
	}
	add_filter( 'get_site_icon_url', 'hwcoe_ufl_child_icon_url' );
}

/*
 * Theme variable definitions
 */
define( "HWCOE_UFL_CAREER_INC_DIR", get_stylesheet_directory() . "/inc/modules" );
/*
* Visual Editor Styles
*/

function my_mce_buttons_2($buttons) {
    array_unshift($buttons, 'styleselect');
    return $buttons;
}
add_filter('mce_buttons_2', 'my_mce_buttons_2');

// Callback function to filter the MCE settings
function my_mce_before_init_insert_formats( $init_array ) {  
	// Define the style_formats array
	$style_formats = array(  
		// Each array child is a format with its own settings
		array(  
			'title' => 'Button',  
			'block' => 'div',  
			'classes' => 'cf-single-button',
			'wrapper' => false,
			
		),  
	);  
	// Insert the array, JSON ENCODED, into 'style_formats'
	$init_array['style_formats'] = json_encode( $style_formats );  
	
	return $init_array;  
  
} 
// Attach callback to 'tiny_mce_before_init' 
add_filter( 'tiny_mce_before_init', 'my_mce_before_init_insert_formats' );  

function create_post_type() {
  register_post_type( 'cf-event_information',
    array(
      'labels' => array(
        'name' => __( 'Details' ), //Top of page when in post type
        'singular_name' => __( 'Event Information' ), //per post
		'menu_name' => __('Event Information'), //Shows up on side menu
		'all_items' => __('Event Details'), //On side menu as name of all items
	  ),
      'public' => true,
	  'menu_position' => 4,
      'has_archive' => true,
    )
  );
}
add_action( 'init', 'create_post_type' );


// Integrate Advanced Custom Fields
add_filter( 'acf/settings/save_json', function() {
	// save to the acf-json directory in child theme folder
    return get_stylesheet_directory() . '/inc/acf-json';
} );

add_filter( 'acf/settings/load_json', function( $paths ) {
    unset( $paths[0] );
    
    // load child theme custom fields
    $paths[] = get_stylesheet_directory() . '/inc/acf-json';
    // load parent theme custom fields
    $paths[] = get_template_directory() . '/inc/advanced-custom-fields/acf-json/';

    return $paths;
} );