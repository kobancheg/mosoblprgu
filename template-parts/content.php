<?php
/**
 * The default template for displaying content
 *
 * Used for both single and index/archive/search.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<div class="cell">
    <div class="card border-none">
        <article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
            <div class="card-image">
                <?php echo get_the_post_thumbnail() ?>
            </div>
            <div class="card-section grid-margin-x">
                <header>
                    <?php
                    if (is_single()) {
                        the_title('<h1 class="entry-title h6">', '</h1>');
                    } else {
                        the_title('<h2 class="entry-title h6"><a href="' . esc_url(get_permalink()) . '" rel="bookmark">', '</a></h2>');
                    }
                    ?>
                </header>
                <div class="entry-content">
                    <?php the_content(); ?>
                    <?php edit_post_link(__('(Edit)', 'foundationpress'), '<span class="edit-link">', '</span>'); ?>
                </div>
                <footer>
                    <?php
                    wp_link_pages(
                        array(
                            'before' => '<nav id="page-nav"><p>' . __('Pages:', 'foundationpress'),
                            'after' => '</p></nav>',
                        )
                    );
                    ?>
                    <?php $tag = get_the_tags();
                    if ($tag) { ?><p><?php the_tags(); ?></p><?php } ?>
                </footer>
            </div>
        </article>
    </div>
</div>