<?php
if ( ! defined( '_S_VERSION' ) ) {
	define( '_S_VERSION', '1.0.0' );
}

function glycurewebspec_setup() {
	load_theme_textdomain( 'glycurewebspec', get_template_directory() . '/languages' );
	add_theme_support( 'automatic-feed-links' );
	add_theme_support( 'title-tag' );
	add_theme_support( 'post-thumbnails' );
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'glycurewebspec' ),
		)
	);
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
	
	add_theme_support( 'customize-selective-refresh-widgets' );
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
add_action( 'after_setup_theme', 'glycurewebspec_setup' );

function glycurewebspec_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'glycurewebspec_content_width', 640 );
}
add_action( 'after_setup_theme', 'glycurewebspec_content_width', 0 );

function glycurewebspec_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'glycurewebspec' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'glycurewebspec' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Logo', 'glycurewebspec' ),
			'id'            => 'footer-logo',
			'description'   => esc_html__( 'Add widgets here.', 'glycurewebspec' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Footer Content', 'glycurewebspec' ),
			'id'            => 'footer-content',
			'description'   => esc_html__( 'Add widgets here.', 'glycurewebspec' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	
}
add_action( 'widgets_init', 'glycurewebspec_widgets_init' );


function glycurewebspec_scripts() {
	wp_enqueue_style( 'glycurewebspec-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'glycurewebspec-style', 'rtl', 'replace' );

	wp_enqueue_script( 'glycurewebspec-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'glycurewebspec_scripts' );



add_action( 'init', 'faq_type' );
function faq_type() {
	$sliderlabels = array(
		'name'               => _x( 'FAQs', 'post type general name', 'your-plugin-textdomain' ),
		'singular_name'      => _x( 'FAQs', 'post type singular name', 'your-plugin-textdomain' ),
		'menu_name'          => _x( 'FAQs', 'admin menu', 'your-plugin-textdomain' ),
		'name_admin_bar'     => _x( 'FAQs', 'add new on admin bar', 'your-plugin-textdomain' ),
		'add_new'            => _x( 'Add New', 'book', 'your-plugin-textdomain' ),
		'add_new_item'       => __( 'Add New FAQs', 'your-plugin-textdomain' ),
		'new_item'           => __( 'New FAQs', 'your-plugin-textdomain' ),
		'edit_item'          => __( 'Edit FAQs', 'your-plugin-textdomain' ),
		'view_item'          => __( 'View FAQs', 'your-plugin-textdomain' ),
		'all_items'          => __( 'All FAQs', 'your-plugin-textdomain' ),
		'search_items'       => __( 'Search FAQs', 'your-plugin-textdomain' ),
		'parent_item_colon'  => __( 'Parent FAQs:', 'your-plugin-textdomain' ),
		'not_found'          => __( 'No FAQs found.', 'your-plugin-textdomain' ),
		'not_found_in_trash' => __( 'No FAQs found in Trash.', 'your-plugin-textdomain' )
	);
	$sliderargs = array(
		'labels'             => $sliderlabels,
        'description'        => __( 'Description.', 'your-plugin-textdomain' ),
		'public'             => true,
		'publicly_queryable' => true,
		'show_ui'            => true,
		'show_in_menu'       => true,
		'query_var'          => true,
		'capability_type'    => 'post',
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => null,
		'supports'           => array( 'title', 'editor', 'thumbnail','custom-fields')
	);
	register_post_type( 'faq', $sliderargs );
	
	$labels = array(
		'name'              => _x( 'FAQs Category', 'taxonomy general name', 'textdomain' ),
		'singular_name'     => _x( 'FAQs Category', 'taxonomy singular name', 'textdomain' ),
		'search_items'      => __( 'Search FAQs Category', 'textdomain' ),
		'all_items'         => __( 'All FAQs Category', 'textdomain' ),
		'parent_item'       => __( 'Parent FAQs Category', 'textdomain' ),
		'parent_item_colon' => __( 'Parent FAQs Category:', 'textdomain' ),
		'edit_item'         => __( 'Edit FAQs Category', 'textdomain' ),
		'update_item'       => __( 'Update FAQs Category', 'textdomain' ),
		'add_new_item'      => __( 'Add New FAQs Category', 'textdomain' ),
		'new_item_name'     => __( 'New FAQs Category Name', 'textdomain' ),
		'menu_name'         => __( 'FAQs Category', 'textdomain' ),
	);
	$args = array(
		'hierarchical'      => true,
		'labels'            => $labels,
		'show_ui'           => true,
		'show_admin_column' => true,
		'query_var'         => true,
		'rewrite'           => array( 'slug' => 'faqcategories' ),
	);
	register_taxonomy( 'faqcategories', array( 'faq' ), $args );
}