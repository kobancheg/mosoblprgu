<?php
/**
 * The template for displaying pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that
 * other "pages" on your WordPress site will use a different template.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

get_header(); ?>
    <div class="main-container">
        <div class="main-grid sidebar-left">
            <main class="main-content">
                <nav aria-label="You are here:" role="navigation">
                <?php// if (function_exists('breadcrumbs')) breadcrumbs(); ?>
            </nav>
                <?php while (have_posts()) : the_post(); ?>
                    <?php get_template_part('template-parts/content', 'page'); ?>
                    <?php comments_template(); ?>
                <?php endwhile; ?>
            </main>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php
get_footer();
