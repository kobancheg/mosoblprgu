<?php
/**
 * Template part for off canvas menu
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */

?>

<nav class="mobile-off-canvas-menu off-canvas position-left" id="off-canvas-side" data-off-canvas data-transition="overlap" role="navigation">
	<?php foundationpress_mobile_nav_side(); ?>
</nav>

<nav class="mobile-off-canvas-menu off-canvas position-right" id="off-canvas-top" data-off-canvas data-transition="overlap" role="navigation">
    <?php foundationpress_mobile_nav(); ?>
</nav>

<div class="off-canvas-content" data-off-canvas-content>
