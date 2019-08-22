<?php

/* The template for displaying home page */

get_header(); ?>

    <div class="main-container">
        <div class="main-grid sidebar-left">
            <main class="main-content home">
                <?php $post_gallery = get_post(156, ARRAY_A);
                $title = $post_gallery['post_content'];
                echo do_shortcode($title);
                ?>
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
                <hr>
                <div class="grid-x align-spaced icon-graphic text-center">
                    <div class="cell shrink"><i class="fas fa-ruble-sign has-warning-color"></i>
                        <span class="display-block text-center">Зарплата</span>
                    </div>
                    <div class="cell shrink"><i class="fas fa-briefcase has-secondary-color"></i>
                        <span class="display-block text-center">Занятость</span>
                    </div>
                    <div class="cell shrink"><i class="fas fa-shield-alt has-success-color"></i>
                        <span class="display-block text-center">Защита</span>
                    </div>
                    <div class="cell shrink"><i class="fas fa-heartbeat has-alert-color"></i>
                        <span class="display-block text-center">Здоровье</span>
                    </div>
                </div>
                <hr>
            </main>
            <?php get_sidebar(); ?>

        </div>
    </div>

<?php get_footer();
