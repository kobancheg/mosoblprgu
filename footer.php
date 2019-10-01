<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "off-canvas-wrap" div and all content after.
 *
 * @package FoundationPress
 * @since FoundationPress 1.0.0
 */
?>

<footer class="footer-container">
	<div class="footer-grid grid-x">
        <div class="cell medium-9">
            <?php dynamic_sidebar('footer-widgets'); ?>
        </div>
        <div class="cell medium-3 align-self-middle text-center medium-text-right">
            <hr class="show-for-small-only">
            <a href="https://yandex.ru/maps/?um=constructor%3Aad120ea2ff411e91a039bc6cd6b0aa5d2b8d21b152ffe718a2abe922c40f6477&source=constructorLink">
                <i class="fas fa-map-marker-alt margin-horizontal-1"></i></a>
            <a href="mailto:mosobkomprofgos@yandex.ru"><i class="fas fa-at margin-horizontal-1"></i></a>
            <a href="tel:+74959387098"><i class="fas fa-phone-alt margin-horizontal-1"></i></a>
        </div>
        <div class="cell medium-12 text-center">
            <hr>
            <span class="copyright">© 1998–2019 <?php bloginfo('name'); ?></span>
        </div>
	</div>
</footer>

<?php if ( get_theme_mod( 'wpt_mobile_menu_layout' ) === 'offcanvas' ) : ?>
	</div><!-- Close off-canvas content -->
<?php endif; ?>

<?php wp_footer(); ?>

<script>
    $(document).ready(function(){
        var ul=$('#left_side').find('.is-active.is-submenu-item').parent('ul').attr('id');
        $('#left_side').foundation('down', $('#'+ul));
        var ul=$('#mob_left_side').find('.is-active.is-submenu-item').parent('ul').attr('id');
        $('#mob_left_side').foundation('down', $('#'+ul));
    });
</script>

</body>
</html>
