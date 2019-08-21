<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "container" div.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<!doctype html>
<html class="no-js" <?php language_attributes(); ?> >
<head>
    <meta charset="<?php bloginfo('charset'); ?>"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<?php if (get_theme_mod('wpt_mobile_menu_layout') === 'offcanvas') : ?>
    <?php get_template_part('template-parts/mobile-off-canvas'); ?>
<?php endif; ?>

<header class="site-header main-container" role="banner">
    <div class="site-title-bar title-bar">
        <button aria-label="<?php _e('Main Menu', 'foundationpress'); ?>" class="menu-icon alt-menu float-left"
                type="button" data-toggle="off-canvas-side"></button>
        <button aria-label="<?php _e('Main Menu', 'foundationpress'); ?>" class="menu-icon alt-menu-top float-right"
                type="button" data-toggle="off-canvas-top"></button>
    </div>
    <nav class="site-navigation top-bar grid-x" role="navigation">
        <div class="top-bar-left cell medium-4 large-3 align-self-middle">
            <img class="logo float-center"
                 src="<?php echo get_template_directory_uri() ?>/dist/assets/images/logo3.png">
        </div>
        <div class="top-bar-center cell medium-8 large-9 align-self-bottom">
            <div class="site-desktop-title top-bar-title text-center">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
            </div>
            <hr class="hide-for-large hr-title">
            <div class="grid-x grid-padding-x address align-center">
                <div class="cell shrink"><i class="fas fa-map-marker-alt"></i><a href="">119119, г.Москва, ул. Ленинский
                        проспект, д.42</a></div>
                <div class="cell shrink"><i class="fas fa-at"></i><a href="mailto:">mosobkomprofgos@yandex.ru</a></div>
                <div class="cell shrink"><i class="fas fa-phone-alt"></i><a href="tel:+74959387090">8(495)938-70-90</a>
                </div>
                <div class="cell shrink"><i class="fas fa-fax"></i><a href="tel:+74959387097">8(495)938-70-97</a></div>
            </div>
        </div>
    </nav>
    <hr class="hr-nav">
    <nav class="top-menu" id="<?php foundationpress_mobile_menu_id(); ?>">
        <?php foundationpress_top_bar_r(); ?>

        <?php if (!get_theme_mod('wpt_mobile_menu_layout') || get_theme_mod('wpt_mobile_menu_layout') === 'topbar') : ?>
            <?php get_template_part('template-parts/mobile-top-bar'); ?>
        <?php endif; ?>
    </nav>
</header>
