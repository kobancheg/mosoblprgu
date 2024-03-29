<?php
/**
 * The template for displaying all single posts and attachments
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
			<?php while ( have_posts() ) : the_post(); ?>
				<?php get_template_part( 'template-parts/content', '' ); ?>
			<?php endwhile; ?>
		</main>

        <?php get_sidebar(); ?>
	</div>
</div>
<?php get_footer();
