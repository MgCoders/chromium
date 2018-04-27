<?php
/**
 * Theme functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * When using a child theme you can override certain functions (those wrapped
 * in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before
 * the parent theme's file, so the child theme functions would be used.
 */

if ( ! function_exists( 'medicus_setup' ) ) :
/**
 * Theme setup.
 *
 * Set up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support post thumbnails.
 */
function medicus_setup() {
    // This theme styles the visual editor to resemble the theme style.
    add_editor_style( array( 'css/editor-style.css' ) );

    /* Homepage Slider */

    add_image_size( 'thumb-loop', 230, 230, true );
    add_image_size( 'thumb-loop-medium', 360, 360, true );
    add_image_size( 'thumb-loop-big', 555, 340, true );
    add_image_size( 'thumb-loop-full', 1600, 500, true );

    /*
     * Switch default core markup for search form, comment form, and comments
     * to output valid HTML5.
     */
    add_theme_support( 'html5', array(
        'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
    ) );

    /*
     * Let WordPress manage the document title.
     * By adding theme support, we declare that this theme does not use a
     * hard-coded <title> tag in the document head, and expect WordPress to
     * provide it for us.
     */
    add_theme_support( 'title-tag' );

    // Register nav menus
    register_nav_menus( array(
        'primary' => __( 'Main Menu', 'wpzoom' )
    ) );
}
endif;
add_action( 'after_setup_theme', 'medicus_setup' );



/*  Add support for Custom Background
==================================== */

add_theme_support( 'custom-background' );

/* Enable Excerpts for Static Pages
==================================== */

add_action( 'init', 'wpzoom_excerpts_for_pages' );

function wpzoom_excerpts_for_pages() {
	add_post_type_support( 'page', 'excerpt' );
}


/*  Add Support for Shortcodes in Excerpt
========================================== */

add_filter( 'the_excerpt', 'shortcode_unautop' );
add_filter( 'the_excerpt', 'do_shortcode' );

add_filter( 'widget_text', 'shortcode_unautop' );
add_filter( 'widget_text', 'do_shortcode' );

add_filter( 'widget_text', array( $wp_embed, 'run_shortcode' ), 8 );
add_filter( 'widget_text', array( $wp_embed, 'autoembed'), 8 );


/*  Custom Excerpt Length
==================================== */

function new_excerpt_length( $length ) {
    return (int) option::get( "excerpt_length" ) ? (int)option::get( "excerpt_length" ) : 50;
}

add_filter( 'excerpt_length', 'new_excerpt_length' );



/*  Maximum width for images in posts
=========================================== */

if ( ! isset( $content_width ) ) $content_width = 750;



if ( ! function_exists( 'medicus_get_the_archive_title' ) ) :
/* Custom Archives titles.
=================================== */
function medicus_get_the_archive_title( $title ) {
    if ( is_category() ) {
        $title = single_cat_title( '', false );
    }

    return $title;
}
endif;
add_filter( 'get_the_archive_title', 'medicus_get_the_archive_title' );



if ( ! function_exists( 'medicus_alter_main_query' ) ) :
/**
 * Alter main WordPress Query to exclude specific categories
 * and posts from featured slider if this is configured via Theme Options.
 *
 * @param $query WP_Query
 */
function medicus_alter_main_query( $query ) {
    // until this is fixed https://core.trac.wordpress.org/ticket/27015
    $is_front = false;

    if ( get_option( 'page_on_front' ) == 0 ) {
        $is_front = is_front_page();
    } else {
        $is_front = $query->get( 'page_id' ) == get_option( 'page_on_front' );
    }

    if ( $query->is_main_query() && $is_front ) {
        if ( option::is_on( 'hide_featured' ) ) {
            $featured_posts = new WP_Query( array(
                'post__not_in'   => get_option( 'sticky_posts' ),
                'posts_per_page' => option::get( 'slideshow_posts' ),
                'meta_key'       => 'wpzoom_is_featured',
                'meta_value'     => 1
            ) );

            $postIDs = array();
            while ( $featured_posts->have_posts() ) {
                $featured_posts->the_post();
                $postIDs[] = get_the_ID();
            }

            wp_reset_postdata();

            $query->set( 'post__not_in', $postIDs );
        }

        if ( count( option::get( 'recent_part_exclude' ) ) ) {
            $query->set( 'cat', '-' . implode( ',-', (array) option::get('recent_part_exclude') ) );
        }
    }
}
endif;
add_action( 'pre_get_posts', 'medicus_alter_main_query' );


/* Enqueue scripts and styles for the front end.
=========================================== */

function medicus_scripts() {
    if ( '' !== $google_request = medicus_get_google_font_uri() ) {
        wp_enqueue_style( 'medicus-google-fonts', $google_request, WPZOOM::$themeVersion );
    }

    // Load our main stylesheet.
    wp_enqueue_style( 'medicus-style', get_stylesheet_uri() );

    wp_enqueue_style( 'media-queries', get_template_directory_uri() . '/css/media-queries.css', array(), WPZOOM::$themeVersion );

    wp_enqueue_style( 'medicus-google-font-default', '//fonts.googleapis.com/css?family=Open+Sans+Condensed:700|Lato:400,300,700,400italic' );
    wp_enqueue_style( 'font-awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css' );

    wp_enqueue_style( 'dashicons' );
    
    wp_enqueue_script( 'mmenu', get_template_directory_uri() . '/js/jquery.mmenu.min.all.js', array( 'jquery' ), WPZOOM::$themeVersion, true );

    wp_enqueue_script( 'flickity', get_template_directory_uri() . '/js/flickity.pkgd.min.js', array(), WPZOOM::$themeVersion, true );

    wp_enqueue_script( 'superfish', get_template_directory_uri() . '/js/superfish.min.js', array( 'jquery' ), WPZOOM::$themeVersion, true );
    
    $themeJsOptions = option::getJsOptions();

    wp_enqueue_script( 'medicus-script', get_template_directory_uri() . '/js/functions.js', array( 'jquery' ), WPZOOM::$themeVersion, true );
    wp_localize_script( 'medicus-script', 'zoomOptions', $themeJsOptions );
}

add_action( 'wp_enqueue_scripts', 'medicus_scripts' );