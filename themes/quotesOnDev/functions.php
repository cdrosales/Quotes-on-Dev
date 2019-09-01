<?php
/**
 * Quotes on Dev Theme functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package QOD_Starter_Theme
 */

if ( ! function_exists( 'qod_setup' ) ) :

function qod_setup() {
	add_theme_support( 'automatic-feed-links' );

	add_theme_support( 'title-tag' );

	register_nav_menus( array(
		'primary' => esc_html( 'Primary Menu' ),
	) );

	add_theme_support( 'html5', array( 'search-form' ) );

}
endif; 
add_action( 'after_setup_theme', 'qod_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * @global int $content_width
 */
function qod_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'qod_content_width', 640 );
	add_theme_support('post-thumbnails'); 
        add_theme_support ('title-tag'); 
        register_nav_menus( array(
            'primary' => 'Primary Menu', 
            'footer' => 'Footer Menu'
        ));
}
add_action( 'after_setup_theme', 'qod_content_width', 0 );


function qod_scripts() {
	wp_enqueue_style( 'qod-style', get_stylesheet_uri(), NULL, microtime(), NULL );

	wp_enqueue_script( 'qod-starter-navigation', get_template_directory_uri() . '/build/js/navigation.min.js', array(), '20151215', true );
	wp_enqueue_script( 'qod-starter-skip-link-focus-fix', get_template_directory_uri() . '/build/js/skip-link-focus-fix.min.js', array(), '20151215', true );
}
add_action( 'wp_enqueue_scripts', 'qod_scripts' );


require get_template_directory() . '/inc/extras.php';


 require get_template_directory() . '/inc/template-tags.php';


require get_template_directory() . '/inc/metaboxes.php';


require get_template_directory() . '/inc/api.php';


function red_scripts() { 
	$script_url = get_template_directory_uri() . '/js/scripts.js';
	wp_enqueue_script( 'jquery' );
	wp_enqueue_script( 'red_posts', $script_url, array( 'jquery' ), microtime(), true );
   	wp_localize_script( 'red_posts', 'red_vars', array(
	   'rest_url' => esc_url_raw( rest_url() ),
	   'wpapi_nonce' => wp_create_nonce( 'wp_rest' ),
	   'post_id' => get_the_ID()
   ) );
 }
 add_action( 'wp_enqueue_scripts', 'red_scripts' );


 function posts_per_page($query) {
    if (is_category()) {
        $query->set('posts_per_page', 5);
    }
    if (is_tag()) {
        $query->set('posts_per_page', 5);
    }

} 
 
add_action('pre_get_posts', 'posts_per_page');


?>