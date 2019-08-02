<?php
/**
 * Customize the output of menus for Foundation mobile walker
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

/**
 * Big thanks to Brett Mason (https://github.com/brettsmason) for the awesome walker
 */

if ( ! class_exists( 'Sidebar_Walker' ) ) :
    class Sidebar_Walker extends Walker_Nav_Menu {
        function start_lvl( &$output, $depth = 0, $args = array() ) {
            $indent  = str_repeat( "\t", $depth );
            $output .= "\n$indent<ul class=\"vertical nested menu list-group\">\n";
        }
    }
endif;


// Добавляем у тега li
/*add_filter( 'nav_menu_css_class', 'filter_nav_menu_css_classes', 10, 4 );
function filter_nav_menu_css_classes( $classes, $item, $args, $depth ) {
    if ( $args->theme_location === 'sidebar-nav' ) {
        $classes[] = 'menu-node';
        $classes[] = 'menu-node--main_lvl_' . ( $depth + 1 );
        if ( $item->current ) {
            $classes[] = 'menu-node--active';
        }
    }
    return $classes;
}*/

// Добавляем классы ссылкам
/*add_filter( 'nav_menu_link_attributes', 'filter_nav_menu_link_attributes', 10, 4 );
function filter_nav_menu_link_attributes( $atts, $item, $args, $depth ) {
    if ( $args->theme_location === 'sidebar-nav' ) {
        $atts['class'] = 'menu-link';
        if ( $item->current ) {
            $atts['class'] .= ' menu-link--active';
        }
    }
    return $atts;
}*/