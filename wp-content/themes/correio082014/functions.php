<?php
/**
 * correio functions file
 *
 * @package WordPress
 * @subpackage correio
 * @since correio 1.0
 */


/******************************************************************************\
	Theme support, standard settings, menus and widgets
\******************************************************************************/

add_theme_support( 'post-formats', array( 'image', 'quote', 'status', 'link' ) );
add_theme_support( 'post-thumbnails' );
add_theme_support( 'automatic-feed-links' );

$custom_header_args = array(
	'width'         => 980,
	'height'        => 300,
	'default-image' => get_template_directory_uri() . '/images/header.png',
);
add_theme_support( 'custom-header', $custom_header_args );

/**
 * Print custom header styles
 * @return void
 */
function correio082014_custom_header() {
	$styles = '';
	if ( $color = get_header_textcolor() ) {
		echo '<style type="text/css"> ' .
				'.site-header .logo .blog-name, .site-header .logo .blog-description {' .
					'color: #' . $color . ';' .
				'}' .
			 '</style>';
	}
}
add_action( 'wp_head', 'correio082014_custom_header', 11 );

$custom_bg_args = array(
	'default-color' => 'fba919',
	'default-image' => '',
);
add_theme_support( 'custom-background', $custom_bg_args );

register_nav_menu( 'main-menu', __( 'Your sites main menu', 'correio082014' ) );

if ( function_exists( 'register_sidebars' ) ) {
	register_sidebar(
		array(
			'id' => 'home-sidebar',
			'name' => __( 'Home widgets', 'correio082014' ),
			'description' => __( 'Shows on home page', 'correio082014' )
		)
	);

	register_sidebar(
		array(
			'id' => 'footer-sidebar',
			'name' => __( 'Footer widgets', 'correio082014' ),
			'description' => __( 'Shows in the sites footer', 'correio082014' )
		)
	);
}

if ( ! isset( $content_width ) ) $content_width = 650;

/**
 * Include editor stylesheets
 * @return void
 */
function correio082014_editor_style() {
    add_editor_style( 'css/wp-editor-style.css' );
}
add_action( 'init', 'correio082014_editor_style' );


/******************************************************************************\
	Scripts and Styles
\******************************************************************************/

/**
 * Enqueue correio082014 scripts
 * @return void
 */
function correio082014_enqueue_scripts() {
	wp_enqueue_style( 'correio082014-styles', get_stylesheet_uri(), array(), '1.0' );
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'default-scripts', get_template_directory_uri() . '/js/scripts.min.js', array(), '1.0', true );
	if ( is_singular() ) wp_enqueue_script( 'comment-reply' );
}
add_action( 'wp_enqueue_scripts', 'correio082014_enqueue_scripts' );


/******************************************************************************\
	Content functions
\******************************************************************************/

/**
 * Displays meta information for a post
 * @return void
 */
function correio082014_post_meta() {
	if ( get_post_type() == 'post' ) {
		echo sprintf(
			__( 'Posted %s in %s%s by %s. ', 'correio082014' ),
			get_the_time( get_option( 'date_format' ) ),
			get_the_category_list( ', ' ),
			get_the_tag_list( __( ', <b>Tags</b>: ', 'correio082014' ), ', ' ),
			get_the_author_link()
		);
	}
	edit_post_link( __( ' (edit)', 'correio082014' ), '<span class="edit-link">', '</span>' );
}

function catch_that_image() {
  global $post, $posts;
  $first_img = '';
  ob_start();
  ob_end_clean();
  $output = preg_match_all('/<img.+src=[\'"]([^\'"]+)[\'"].*>/i', $post->post_content, $matches);
  
  $first_img = $matches[1][0];
 

  if(empty($first_img)) {
    $first_img = "";
  }

  return $first_img;
}

function my_excerpt_length($length) {
	return 40;
}
add_filter('excerpt_length', 'my_excerpt_length');

function comment_count() {
	global $wpdb;
	$count = "SELECT COUNT(*) FROM $wpdb->comments WHERE comment_type = 'pingback' OR comment_type = 'trackback'";
	echo $wpdb->get_var($count);
}

function remove_first_image ($content) {
	if (!is_page() && !is_feed() && !is_feed() && !is_home()) {
		$content = preg_replace("/<img[^>]+\>/i", "", $content, 1);
	} return $content;
}
add_filter('the_content', 'remove_first_image');

add_theme_support( 'infinite-scroll', array(
	'container' => 'content',
	'footer' => 'page',
) );

function get_related_author_posts() {
    global $authordata, $post;

    $authors_posts = get_posts( array( 'author' => $authordata->ID, 'post__not_in' => array( $post->ID ), 'posts_per_page' => 5 ) );

    $output = '<ul>';
    foreach ( $authors_posts as $authors_post ) {
    	$post_date = get_the_date('d-m-Y');
        $output .= '<li><span>' . $post_date . '</span><a href="' . get_permalink( $authors_post->ID ) . '">' . apply_filters( 'the_title', $authors_post->post_title, $authors_post->ID ) . '</a></li>';
    }

    $output .= '</ul>';

    return $output;
}

function correio082014_get_relative_path_url($typedURL)
{
	global $blog_id;
	$abs_path = network_site_url( '/' );

	$rel_path = str_replace($abs_path,'',$typedURL);

	return $rel_path;
}

add_filter('wp_handle_upload', 'correio082014_get_relative_path_url');

