<?php
/**
 * The sidebar containing the main widget area
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>
<aside class="sidebar show-for-medium">
	<?php dynamic_sidebar( 'sidebar-widgets' ); ?>

    <?php get_template_part( 'template-parts/sidebar-nav' ); ?>

</aside>
