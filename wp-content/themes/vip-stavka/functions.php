<?php
function vipstavka_setup() {

	 /*
	 * Switches default core markup for search form, comment form,
	 * and comments to output valid HTML5.
	 */
	 add_theme_support( 'html5', array(
	 'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	 ) );

	 /*
	 * This theme supports all available post formats by default.
	 * See http://codex.wordpress.org/Post_Formats
	 */
	 add_theme_support( 'post-formats', array(
		 'audio', 'gallery', 'image', 'video'
	 ) );

	 /*
	 * This theme uses a custom image size for featured images, displayed on
	 * "standard" posts and pages.
	 */
	 add_theme_support( 'post-thumbnails' );
	 set_post_thumbnail_size( 604, 270, true );

	 // This theme uses its own gallery styles.
	 add_filter( 'use_default_gallery_style', '__return_false' );
}

add_action( 'after_setup_theme', 'vipstavka_setup' );

if ( !function_exists('get_thumbnail_src') ) {
	function get_thumbnail_src()
	{
		return wp_get_attachment_image_src(get_post_thumbnail_id(),array(740, 352))[0];
	}
}
?>