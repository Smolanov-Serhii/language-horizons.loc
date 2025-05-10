<?php
/**
 * language horizons functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package language_horizons
 */

if ( ! defined( '_S_VERSION' ) ) {
    // Replace the version number of the theme on each release.
    define( '_S_VERSION', '1.0.2' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function language_horizons_setup() {
    /*
        * Make theme available for translation.
        * Translations can be filed in the /languages/ directory.
        * If you're building a theme based on language horizons, use a find and replace
        * to change 'language-horizons' to the name of your theme in all the template files.
        */
//    load_theme_textdomain( 'language-horizons', get_template_directory() . '/languages' );

    // Add default posts and comments RSS feed links to head.
//    add_theme_support( 'automatic-feed-links' );

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
    add_image_size( 'news-image-prev', 300, 500 );
    // This theme uses wp_nav_menu() in one location.
    register_nav_menus(
        array(
            'main-menu' => esc_html__( 'Основное меню', 'language-horizons' ),
        )
    );

    /*
        * Switch default core markup for search form, comment form, and comments
        * to output valid HTML5.
        */
    add_theme_support(
        'html5',
        array(
//            'search-form',
//            'comment-form',
//            'comment-list',
//            'gallery',
//            'caption',
            'style',
            'script',
        )
    );

    // Set up the WordPress core custom background feature.
//    add_theme_support(
//        'custom-background',
//        apply_filters(
//            'language_horizons_custom_background_args',
//            array(
//                'default-color' => 'ffffff',
//                'default-image' => '',
//            )
//        )
//    );

    // Add theme support for selective refresh for widgets.
//    add_theme_support( 'customize-selective-refresh-widgets' );
//
//    /**
//     * Add support for core custom logo.
//     *
//     * @link https://codex.wordpress.org/Theme_Logo
//     */
//    add_theme_support(
//        'custom-logo',
//        array(
//            'height'      => 250,
//            'width'       => 250,
//            'flex-width'  => true,
//            'flex-height' => true,
//        )
//    );
}
add_action( 'after_setup_theme', 'language_horizons_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
//function language_horizons_content_width() {
//    $GLOBALS['content_width'] = apply_filters( 'language_horizons_content_width', 640 );
//}
//add_action( 'after_setup_theme', 'language_horizons_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function language_horizons_widgets_init() {
    register_sidebar(
        array(
            'name'          => esc_html__( 'Sidebar', 'language-horizons' ),
            'id'            => 'sidebar-1',
            'description'   => esc_html__( 'Add widgets here.', 'language-horizons' ),
            'before_widget' => '<section id="%1$s" class="widget %2$s">',
            'after_widget'  => '</section>',
            'before_title'  => '<h2 class="widget-title">',
            'after_title'   => '</h2>',
        )
    );
}
//add_action( 'widgets_init', 'language_horizons_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function language_horizons_scripts() {
    wp_enqueue_style( 'language-horizons-style', get_template_directory_uri() . '/dist/css/style.css', array(), _S_VERSION );
//    wp_style_add_data( 'language-horizons-style', 'rtl', 'replace' );

    wp_enqueue_script( 'language-horizons-navigation', get_template_directory_uri() . '/dist/js/common.js', array(), _S_VERSION, true );

//    if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
//        wp_enqueue_script( 'comment-reply' );
//    }
}
add_action( 'wp_enqueue_scripts', 'language_horizons_scripts' );

/**
 * Implement the Custom Header feature.
 */
//require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
//require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
//require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
//require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
    require get_template_directory() . '/inc/jetpack.php';
}

function add_qts_sitemaps_to_robots( $output, $public ) {
    global $wp_sitemaps, $q_config;
    // bail early if either $wp_sitemaps or $q_config are not set, or the site is not public
    if( !isset($wp_sitemaps) || !isset($q_config) || !$public ) return $output;
    // get the default sitemap.xml url
    $index_url = $wp_sitemaps->index->get_index_url();
    // get all languages
    $languages = qtranxf_getSortedLanguages();
    // get default language
    $default_language = qtranxf_getLanguageDefault();
    foreach( $languages as $lang ) {
        // bail early if the current language is the default, since this is
        // being taken care of by WordPress core
        if( $lang === $default_language ) continue;
        $output .= "\nSitemap: " . esc_url( qtranxf_convertUrl($index_url, $lang) ) . "\n";
    }

    return $output;
}
add_filter( 'robots_txt', 'add_qts_sitemaps_to_robots', 2, 2 );


//add_filter( 'use_block_editor_for_post_type', function( $use, $post_type ){
//    return in_array( $post_type, [ 'news' ] );
//}, 100, 2 );

add_filter( 'disable_wpseo_json_ld_search', '__return_true' );


remove_action( 'do_feed_rdf',  'do_feed_rdf',  10, 1 );
remove_action( 'do_feed_rss',  'do_feed_rss',  10, 1 );
remove_action( 'do_feed_rss2', 'do_feed_rss2', 10, 1 );
remove_action( 'do_feed_atom', 'do_feed_atom', 10, 1 );

add_action( 'wp', function(){
    remove_action( 'wp_head', 'feed_links_extra', 3 );
    remove_action( 'wp_head', 'feed_links', 2 );
    remove_action( 'wp_head', 'rsd_link' );
} );

add_filter( 'excerpt_length', function( $length ) { return 20; } );