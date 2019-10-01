<?php
/*
Template Name: Content Tabs
*/
get_header(); ?>
    <div class="main-container">
        <div class="main-grid sidebar-left">
            <main class="main-content">
                <nav aria-label="You are here:" role="navigation">
                <?php// if (function_exists('breadcrumbs')) breadcrumbs(); ?>
            </nav>
                <?php while ( have_posts() ) : the_post(); ?>
                    <?php get_template_part( 'template-parts/content-tabs', 'page' ); ?>
                    <?php comments_template(); ?>
                <?php endwhile; ?>
            </main>
            <?php get_sidebar(); ?>
        </div>
    </div>
<?php get_footer();
