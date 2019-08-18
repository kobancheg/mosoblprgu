<?php

/* The template for displaying home page */

get_header(); ?>

    <div class="main-container">
        <div class="main-grid sidebar-left">
            <main class="main-content home">

                <?php echo do_shortcode('[gallery size="full" ids="164,163,162,161"]'); ?>
                    <div class="grid-x grid-margin-x large-up-2">
                        <?php if (have_posts()) : query_posts('cat=7&posts_per_page=2'); ?>

                            <?php /* Start the Loop */ ?>
                            <?php while (have_posts()) : the_post(); ?>
                                <?php get_template_part('template-parts/content-home', get_post_format()); ?>
                            <?php endwhile; ?>

                        <?php else : ?>
                            <?php get_template_part('template-parts/content', 'none'); ?>

                        <?php endif; // End have_posts() check.
                        wp_reset_query();
                        ?>
                    </div>

            </main>
            <?php get_sidebar(); ?>

        </div>
    </div>

<?php get_footer();
