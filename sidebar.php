<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar">
    <div class="hide-for-small-only"><?php get_template_part('template-parts/sidebar-nav'); ?></div>

    <?php dynamic_sidebar('sidebar-widgets'); ?>
</aside>
