<?php
/**
 * Infinity Flame Soft functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Infinity_Flame_Soft
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function ifs_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Infinity Flame Soft, use a find and replace
		* to change 'ifs' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'ifs', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'ifs' ),
			'menu-2' => esc_html__( 'Footer 1', 'ifs' ),
			'menu-3' => esc_html__( 'Footer 2', 'ifs' ),
			'menu-4' => esc_html__( 'Footer 3', 'ifs' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'ifs_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'ifs_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function ifs_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'ifs_content_width', 640 );
}
add_action( 'after_setup_theme', 'ifs_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function ifs_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'ifs' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'ifs' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'ifs_widgets_init' );

/**
 * Site Option Page 
*/

if( function_exists('acf_add_options_page') ) {	
	acf_add_options_page(array(
	  'page_title' 	=> 'Site Settings',
	  'menu_title'	=> 'Site Settings',
	  'menu_slug' 	=> 'ewa-settings',
	  'capability' => 'edit_posts',
	  'icon_url'   => 'dashicons-welcome-widgets-menus',
	  'position'   => 2,
	  'redirect'		=> false
	));    
  }

  /**
* Register ACF Block
*/

add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types() {

    // Check function exists.
    if( function_exists('acf_register_block_type') ) {
        
        // register section title block.
        acf_register_block_type(array(
          'name'              => 'section-title',
          'title'             => __('Section Title', 'ifs'),
          'description'       => __('A Section Title block inside the page', 'ifs'),
          'render_callback'   => 'my_acf_block_render_callback',
          'category'          => 'formatting',
          'icon'              => 'admin-comments',
          'keywords'          => array( 'section title', 'ifs' ),
        ));

		// register teams block.
        acf_register_block_type(array(
			'name'              => 'teams',
			'title'             => __('Teams', 'ifs'),
			'description'       => __('A Teams block inside the page', 'ifs'),
			'render_callback'   => 'my_acf_block_render_callback',
			'category'          => 'formatting',
			'icon'              => 'admin-comments',
			'keywords'          => array( 'teams', 'ifs' ),
		  ));

		  // register services block.
		  acf_register_block_type(array(
			  'name'              => 'services',
			  'title'             => __('Services', 'ifs'),
			  'description'       => __('A Services block inside the page', 'ifs'),
			  'render_callback'   => 'my_acf_block_render_callback',
			  'category'          => 'formatting',
			  'icon'              => 'admin-comments',
			  'keywords'          => array( 'services', 'ifs' ),
			));

			// register contact block.
			acf_register_block_type(array(
				'name'              => 'contact',
				'title'             => __('Contact', 'ifs'),
				'description'       => __('A Contact block inside the page', 'ifs'),
				'render_callback'   => 'my_acf_block_render_callback',
				'category'          => 'formatting',
				'icon'              => 'admin-comments',
				'keywords'          => array( 'contact', 'ifs' ),
			  ));

			  // register courses block.
			acf_register_block_type(array(
				'name'              => 'courses',
				'title'             => __('Courses', 'ifs'),
				'description'       => __('A Courses block inside the page', 'ifs'),
				'render_callback'   => 'my_acf_block_render_callback',
				'category'          => 'formatting',
				'icon'              => 'admin-comments',
				'keywords'          => array( 'courses', 'ifs' ),
			  ));

			  // register testimonials block.
			acf_register_block_type(array(
				'name'              => 'testimonials',
				'title'             => __('Testimonials', 'ifs'),
				'description'       => __('A Testimonials block inside the page', 'ifs'),
				'render_callback'   => 'my_acf_block_render_callback',
				'category'          => 'formatting',
				'icon'              => 'admin-comments',
				'keywords'          => array( 'testimonials', 'ifs' ),
			  ));

			  // register process block.
			acf_register_block_type(array(
				'name'              => 'process',
				'title'             => __('Process', 'ifs'),
				'description'       => __('A Process block inside the page', 'ifs'),
				'render_callback'   => 'my_acf_block_render_callback',
				'category'          => 'formatting',
				'icon'              => 'admin-comments',
				'keywords'          => array( 'process', 'ifs' ),
			  ));

			  // register cta1 block.
			acf_register_block_type(array(
				'name'              => 'cta1',
				'title'             => __('CTA 1', 'ifs'),
				'description'       => __('A CTA 1 block inside the page', 'ifs'),
				'render_callback'   => 'my_acf_block_render_callback',
				'category'          => 'formatting',
				'icon'              => 'admin-comments',
				'keywords'          => array( 'cta', 'ifs' ),
			  ));

			  // register cta2 block.
			acf_register_block_type(array(
				'name'              => 'cta2',
				'title'             => __('CTA 2', 'ifs'),
				'description'       => __('A CTA 2 block inside the page', 'ifs'),
				'render_callback'   => 'my_acf_block_render_callback',
				'category'          => 'formatting',
				'icon'              => 'admin-comments',
				'keywords'          => array( 'cta', 'ifs' ),
			  ));

			  // register about block.
			acf_register_block_type(array(
				'name'              => 'about',
				'title'             => __('About', 'ifs'),
				'description'       => __('A About block inside the page', 'ifs'),
				'render_callback'   => 'my_acf_block_render_callback',
				'category'          => 'formatting',
				'icon'              => 'admin-comments',
				'keywords'          => array( 'about', 'ifs' ),
			  ));

			  // register hero block.
			acf_register_block_type(array(
				'name'              => 'Hero',
				'title'             => __('Hero', 'ifs'),
				'description'       => __('A Hero block inside the page', 'ifs'),
				'render_callback'   => 'my_acf_block_render_callback',
				'category'          => 'formatting',
				'icon'              => 'admin-comments',
				'keywords'          => array( 'hero', 'ifs' ),
			  ));
      	}
  	}

function my_acf_block_render_callback( $block ) {

	$slug = str_replace( 'acf/', '', $block['name'] );
	if ( file_exists( get_theme_file_path( "/template-parts/blocks/ifs-{$slug}/ifs-{$slug}.php" ) ) ) {
		include( get_theme_file_path( "/template-parts/blocks/ifs-{$slug}/ifs-{$slug}.php" ) );
	}
}



/**
 * Enqueue scripts and styles.
 */
function ifs_scripts() {
	wp_enqueue_style( 'ifs-font-awesome', get_template_directory_uri() . '/assets/css/plugins/font-awesome/css/font-awesome.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'ifs-slick', get_template_directory_uri() . '/assets/css/plugins/slick-slider/slick.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'ifs-nav', get_template_directory_uri() . '/assets/css/plugins/slick-nav/slick-nav.min.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'ifs-style-main', get_template_directory_uri() . '/assets/css/style.css', array(), _S_VERSION, 'all' );
	wp_enqueue_style( 'ifs-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'ifs-style', 'rtl', 'replace' );

	wp_enqueue_script( 'ifs-slick-slider', get_template_directory_uri() . '/assets/js/slick.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'ifs-waypoint', get_template_directory_uri() . '/assets/js/waypoint.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'ifs-counterup', get_template_directory_uri() . '/assets/js/counterup.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'ifs-slick-nav', get_template_directory_uri() . '/assets/js/slick-nav.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'ifs-main', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'ifs_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}



// Register Custom Post Type course
function create_course_cpt() {

	$labels = array(
		'name' => _x( 'Courses', 'Post Type General Name', 'ifs' ),
		'singular_name' => _x( 'Courses', 'Post Type Singular Name', 'ifs' ),
		'menu_name' => _x( 'Courses', 'Admin Menu text', 'ifs' ),
		'name_admin_bar' => _x( 'Courses', 'Add New on Toolbar', 'ifs' ),
		'archives' => __( 'Courses Archives', 'ifs' ),
		'attributes' => __( 'Courses Attributes', 'ifs' ),
		'parent_item_colon' => __( 'Parent course:', 'ifs' ),
		'all_items' => __( 'All Courses', 'ifs' ),
		'add_new_item' => __( 'Add New course', 'ifs' ),
		'add_new' => __( 'Add New', 'ifs' ),
		'new_item' => __( 'New course', 'ifs' ),
		'edit_item' => __( 'Edit course', 'ifs' ),
		'update_item' => __( 'Update course', 'ifs' ),
		'view_item' => __( 'View course', 'ifs' ),
		'view_items' => __( 'View courses', 'ifs' ),
		'search_items' => __( 'Search course', 'ifs' ),
		'not_found' => __( 'Not found', 'ifs' ),
		'not_found_in_trash' => __( 'Not found in Trash', 'ifs' ),
		'featured_image' => __( 'Featured Image', 'ifs' ),
		'set_featured_image' => __( 'Set featured image', 'ifs' ),
		'remove_featured_image' => __( 'Remove featured image', 'ifs' ),
		'use_featured_image' => __( 'Use as featured image', 'ifs' ),
		'insert_into_item' => __( 'Insert into course', 'ifs' ),
		'uploaded_to_this_item' => __( 'Uploaded to this course', 'ifs' ),
		'items_list' => __( 'Courses list', 'ifs' ),
		'items_list_navigation' => __( 'Courses list navigation', 'ifs' ),
		'filter_items_list' => __( 'Filter Courses list', 'ifs' ),
	);
	$args = array(
		'label' => __( 'Courses', 'ifs' ),
		'description' => __( '', 'ifs' ),
		'labels' => $labels,
		'menu_icon' => '',
		'supports' => array('title', 'thumbnail', 'custom-fields'),
		'taxonomies' => array(),
		'public' => true,
		'show_ui' => true,
		'show_in_menu' => true,
		'menu_position' => 5,
		'show_in_admin_bar' => true,
		'show_in_nav_menus' => true,
		'can_export' => true,
		'has_archive' => false,
		'hierarchical' => false,
		'exclude_from_search' => false,
		'publicly_queryable' => true,
		'capability_type' => 'post',
	);
	register_post_type( 'course', $args );

}
add_action( 'init', 'create_course_cpt', 0 );



/**
 * @snippet  Duplicate posts and pages without plugins
 * @author   Misha Rudrastyh
 * @url      https://rudrastyh.com/wordpress/duplicate-post.html
 */

// Add the duplicate link to action list for post_row_actions
// for "post" and custom post types
add_filter( 'post_row_actions', 'rd_duplicate_post_link', 10, 2 );
// for "page" post type
add_filter( 'page_row_actions', 'rd_duplicate_post_link', 10, 2 );


function rd_duplicate_post_link( $actions, $post ) {

	if( ! current_user_can( 'edit_posts' ) ) {
		return $actions;
	}

	$url = wp_nonce_url(
		add_query_arg(
			array(
				'action' => 'rd_duplicate_post_as_draft',
				'post' => $post->ID,
			),
			'admin.php'
		),
		basename(__FILE__),
		'duplicate_nonce'
	);

	$actions[ 'duplicate' ] = '<a href="' . $url . '" title="Duplicate this item" rel="permalink">Duplicate</a>';

	return $actions;
}

/*
 * Function creates post duplicate as a draft and redirects then to the edit post screen
 */
add_action( 'admin_action_rd_duplicate_post_as_draft', 'rd_duplicate_post_as_draft' );

function rd_duplicate_post_as_draft(){

	// check if post ID has been provided and action
	if ( empty( $_GET[ 'post' ] ) ) {
		wp_die( 'No post to duplicate has been provided!' );
	}

	// Nonce verification
	if ( ! isset( $_GET[ 'duplicate_nonce' ] ) || ! wp_verify_nonce( $_GET[ 'duplicate_nonce' ], basename( __FILE__ ) ) ) {
		return;
	}

	// Get the original post id
	$post_id = absint( $_GET[ 'post' ] );

	// And all the original post data then
	$post = get_post( $post_id );

	/*
	 * if you don't want current user to be the new post author,
	 * then change next couple of lines to this: $new_post_author = $post->post_author;
	 */
	$current_user = wp_get_current_user();
	$new_post_author = $current_user->ID;

	// if post data exists (I am sure it is, but just in a case), create the post duplicate
	if ( $post ) {

		// new post data array
		$args = array(
			'comment_status' => $post->comment_status,
			'ping_status'    => $post->ping_status,
			'post_author'    => $new_post_author,
			'post_content'   => $post->post_content,
			'post_excerpt'   => $post->post_excerpt,
			'post_name'      => $post->post_name,
			'post_parent'    => $post->post_parent,
			'post_password'  => $post->post_password,
			'post_status'    => 'draft',
			'post_title'     => $post->post_title,
			'post_type'      => $post->post_type,
			'to_ping'        => $post->to_ping,
			'menu_order'     => $post->menu_order
		);

		// insert the post by wp_insert_post() function
		$new_post_id = wp_insert_post( $args );

		/*
		 * get all current post terms ad set them to the new post draft
		 */
		$taxonomies = get_object_taxonomies( get_post_type( $post ) ); // returns array of taxonomy names for post type, ex array("category", "post_tag");
		if( $taxonomies ) {
			foreach ( $taxonomies as $taxonomy ) {
				$post_terms = wp_get_object_terms( $post_id, $taxonomy, array( 'fields' => 'slugs' ) );
				wp_set_object_terms( $new_post_id, $post_terms, $taxonomy, false );
			}
		}

		// duplicate all post meta
		$post_meta = get_post_meta( $post_id );
		if( $post_meta ) {

			foreach ( $post_meta as $meta_key => $meta_values ) {

				if( '_wp_old_slug' == $meta_key ) { // do nothing for this meta key
					continue;
				}

				foreach ( $meta_values as $meta_value ) {
					add_post_meta( $new_post_id, $meta_key, $meta_value );
				}
			}
		}

		// finally, redirect to the edit post screen for the new draft
		// wp_safe_redirect(
		// 	add_query_arg(
		// 		array(
		// 			'action' => 'edit',
		// 			'post' => $new_post_id
		// 		),
		// 		admin_url( 'post.php' )
		// 	)
		// );
		// exit;
		// or we can redirect to all posts with a message
		wp_safe_redirect(
			add_query_arg(
				array(
					'post_type' => ( 'post' !== get_post_type( $post ) ? get_post_type( $post ) : false ),
					'saved' => 'post_duplication_created' // just a custom slug here
				),
				admin_url( 'edit.php' )
			)
		);
		exit;

	} else {
		wp_die( 'Post creation failed, could not find original post.' );
	}

}

/*
 * In case we decided to add admin notices
 */
add_action( 'admin_notices', 'rudr_duplication_admin_notice' );

function rudr_duplication_admin_notice() {

	// Get the current screen
	$screen = get_current_screen();

	if ( 'edit' !== $screen->base ) {
		return;
	}

    //Checks if settings updated
    if ( isset( $_GET[ 'saved' ] ) && 'post_duplication_created' == $_GET[ 'saved' ] ) {

		 echo '<div class="notice notice-success is-dismissible"><p>Post copy created.</p></div>';
		 
    }
}