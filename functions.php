<?php
/**
 * Author: Ole Fredrik Lie
 * URL: http://olefredrik.com
 *
 * FoundationPress functions and definitions
 *
 * Set up the theme and provides some helper functions, which are used in the
 * theme as custom template tags. Others are attached to action and filter
 * hooks in WordPress to change core functionality.
 *
 * @link https://codex.wordpress.org/Theme_Development
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/** Various clean up functions */
require_once('library/cleanup.php');

/** Required for Foundation to work properly */
require_once('library/foundation.php');

/** Format comments */
require_once('library/class-foundationpress-comments.php');

/** Register orbit-slider */
require_once('library/breadcrumbs.php');

/** Register all navigation menus */
require_once('library/navigation.php');

/** Add menu walkers for top-bar and off-canvas */
require_once('library/class-foundationpress-top-bar-walker.php');
require_once('library/class-foundationpress-mobile-walker.php');
require_once('library/class-sidebar-walker.php');

/** Create widget areas in sidebar and footer */
require_once('library/widget-areas.php');

/** Return entry meta information for posts */
require_once('library/entry-meta.php');

/** Enqueue scripts */
require_once('library/enqueue-scripts.php');

/** Add theme support */
require_once('library/theme-support.php');

/** Add Nav Options to Customer */
require_once('library/custom-nav.php');

/** Change WP's sticky post class */
require_once('library/sticky-posts.php');

/** Configure responsive image sizes */
require_once('library/responsive-images.php');

/** Gutenberg editor support */
require_once('library/gutenberg.php');

/** If your site requires protocol relative url's for theme assets, uncomment the line below */
// require_once( 'library/class-foundationpress-protocol-relative-theme-assets.php' );

show_admin_bar(false);

add_filter('excerpt_length', function () {
    return 20;
});

add_filter('excerpt_more', 'new_excerpt_more');
function new_excerpt_more($more)
{
    global $post;
    return ' [...] <div><a href="' . get_permalink($post) . '">Читать далее...</a></div>';
}

// фотогалерея-слайдер
function gallery_slider($output, $attr)
{
    $ids = explode(',', $attr['ids']);
    $images = get_posts(array(
        'include' => $ids,
        'post_status' => 'inherit',
        'post_type' => 'attachment',
        'post_mime_type' => 'image',
        'orderby' => 'post__in',
    ));
    if ($images) {
        $output = gallery_slider_template($images);
        return $output;
    }
}

add_filter('post_gallery', 'gallery_slider', 10, 2);

function gallery_slider_template($images)
{
    ob_start();
    include 'template-parts/gallery-slider.php';
    $output = ob_get_clean();
    return $output;
}

function get_term_sticky_posts()
{
    if ((!is_category()) && (!is_tag()))
        return false;

    $stickies = get_option('sticky_posts');

    if (!$stickies)
        return false;

    $current_object = get_queried_object_id();

    if (is_category()) {
        $args = [
            'nopaging' => true,
            'post__in' => $stickies,
            'cat' => $current_object,
            'ignore_sticky_posts' => 1,
            'fields' => 'ids'
        ];

    } elseif (is_tag()) {
        $args = [
            'nopaging' => true,
            'post__in' => $stickies,
            'tag_id' => $current_object,
            'ignore_sticky_posts' => 1,
            'fields' => 'ids'
        ];
    }

    $q = get_posts($args);

    return $q;
}

add_action('pre_get_posts', function ($q) {

    if (!is_admin()
        && $q->is_main_query()
        && (($q->is_category()) || ($q->is_tag()))
        && ((term_exists(get_query_var('category_name'))) || (term_exists(get_query_var('tag'))))
    ) {

        if (function_exists('get_term_sticky_posts')) {

            $stickies = get_term_sticky_posts();

            if ($stickies) {

                $q->set('post__not_in', $stickies);


                if (!$q->is_paged()) {


                    add_filter('the_posts', function ($posts) use ($stickies) {
                        $term_stickies = get_posts(['post__in' => $stickies, 'nopaging' => true]);

                        $posts = array_merge($term_stickies, $posts);

                        return $posts;
                    }, 10, 1);
                }
            }
        }
    }
});
