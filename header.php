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
    <div class="site-title-bar title-bar" <?php foundationpress_title_bar_responsive_toggle(); ?>>
        <div class="title-bar-left">
            <button aria-label="<?php _e('Main Menu', 'foundationpress'); ?>" class="menu-icon" type="button"
                    data-toggle="<?php foundationpress_mobile_menu_id(); ?>"></button>
            <span class="site-mobile-title title-bar-title">
					<a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
				</span>
        </div>
    </div>
    <nav class="site-navigation top-bar grid-x" role="navigation">
        <div class="top-bar-left cell medium-4">
            <img class="logo" src="<?php echo get_template_directory_uri() ?>/dist/assets/images/logo3.png">
        </div>
        <div class="top-bar-center cell flex-container flex-dir-column medium-8 align-self-stretch">
            <div class="site-desktop-title top-bar-title flex-child-shrink text-center height-100">
                <a href="<?php echo esc_url(home_url('/')); ?>" rel="home"><?php bloginfo('name'); ?></a>
            </div>
            <address class="flex-child-shrink">
                <div class="float-left"><i class="fas fa-map-marker-alt fa-lg subheader"></i>119119, г.Москва, ул. Ленинский проспект
                    д.42
                </div>
                <div class="float-center"><i class="fas fa-at fa-lg subheader"></i><a href="mailto:">mosobkomprofgos@yandex.ru</a></div>
                <div class="float-right"><i class="fas fa-phone-alt fa-lg subheader"></i>8(495)938-70-98, 70-97</div>
            </address>
        </div>
    </nav>
    <hr>
    <nav class="top-menu" id="<?php foundationpress_mobile_menu_id(); ?>">
        <?php foundationpress_top_bar_r(); ?>

        <?php if (!get_theme_mod('wpt_mobile_menu_layout') || get_theme_mod('wpt_mobile_menu_layout') === 'topbar') : ?>
            <?php get_template_part('template-parts/mobile-top-bar'); ?>
        <?php endif; ?>
    </nav>
</header>
