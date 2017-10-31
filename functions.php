<?php

/*
|--------------------------------------------------------------------------
| 0. Enqueue scripts
|--------------------------------------------------------------------------
*/

function bedrock_scripts() {

    wp_deregister_script( 'jquery' );

    // Core scripts
    wp_enqueue_script( 'jquery', get_template_directory_uri() . '/bower_components/jquery/dist/jquery.min.js', null, '2.1.4', false );
    wp_enqueue_script( 'what-input', get_template_directory_uri() . '/bower_components/what-input/what-input.min.js', null, '1.1.3', true );
    wp_enqueue_script( 'foundation', get_template_directory_uri() . '/bower_components/foundation-sites/dist/foundation.min.js', null, '6.0.4', true );

    // Custom scripts

    // User scripts
    wp_enqueue_script( 'app', get_template_directory_uri() . '/js/app-min.js', null, null, true );

}

add_action( 'wp_enqueue_scripts', 'bedrock_scripts' );


/*
|--------------------------------------------------------------------------
| 1. Basic setup
|--------------------------------------------------------------------------
*/

// Hide admin bar
show_admin_bar(false);

// Clean up header
remove_action( 'wp_head', 'wp_generator' );
remove_action( 'wp_head', 'rsd_link' );
remove_action( 'wp_head', 'wlwmanifest_link' );

// Theme support
add_theme_support( 'title-tag' );
add_theme_support( 'post-thumbnails' );

function register_theme_menu() {
    register_nav_menu( "topnav", __('Primary Menu', 'theme-slug') );
}
add_action( 'init', 'register_theme_menu', 10 );




/*
|--------------------------------------------------------------------------
| 2. Post thumbnails
|--------------------------------------------------------------------------
*/

// New image sizes
add_image_size( 'bedrock-200', 200, 200, true );

// Remove default thumbnail sizes
function bedrock_drop_default_image_sizes( $sizes ) {
	unset( $sizes['medium'] );
	unset( $sizes['large'] );
	return $sizes;
}

add_filter( 'intermediate_image_sizes_advanced', 'bedrock_drop_default_image_sizes' );


/*
|--------------------------------------------------------------------------
| 3. Functions
|--------------------------------------------------------------------------
*/

// Grab highest ancestor page ID
function bedrock_ancestor_id()
{
    global $post;

    if ( $post->post_parent ) {
        $ancestors = array_reverse( get_post_ancestors( $post->ID ) );
        return $ancestors[0];
    }

    return $post->ID;
}

/*
|--------------------------------------------------------------------------
| Custom Editor Styles
|--------------------------------------------------------------------------
*/

// Callback function to insert 'styleselect' into the $buttons array
function my_mce_buttons_2( $buttons ) {
	array_unshift( $buttons, 'styleselect' );
	return $buttons;
}
// Register our callback to the appropriate filter
add_filter( 'mce_buttons_2', 'my_mce_buttons_2' );

/*
|--------------------------------------------------------------------------
| Remove comments
|--------------------------------------------------------------------------
*/

add_action('init', 'remove_comment_support', 100);
function remove_comment_support() {
    // Remove post type support for each post type
    foreach (get_post_types() as $post_type) {
        if (post_type_supports( $post_type, 'comments' )) {
            // Don't remove comment support for shop orders
            if ($post_type !== 'shop_order') {
                remove_post_type_support( 'page', 'comments' );
            }
        }
    }
    // Uncomment the following to force hiding comment meta boxes
    // remove_meta_box( 'commentsdiv', 'post', 'normal' );
}
// Hide edit screen in WP backend
add_action( 'admin_menu', 'remove_comments_page' );
function remove_comments_page() {
    remove_menu_page( 'edit-comments.php' );
}