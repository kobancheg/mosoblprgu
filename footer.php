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
    $(document).ready(function () {
        var tm = $('.off-canvas').html();
        $('.alt-menu-top').click(function(){
            $('.off-canvas').html(tm);
        });
        $('.alt-menu').click(function(){
            $('.off-canvas').html($('#side-menu').html());
        });
    });
    $(document).ready(function () {
        var ul = $('.is-active.is-submenu-item').parent('ul').attr('id');
        $('#menu-side_menu').foundation('down', $('#' + ul));
        $("li[aria-expanded] > a").click(function (e) {
            if ($(e.currentTarget).parent('li').attr('aria-expanded') == 'true') {
                window.location = $(this).attr('href');
            }
        });
        if ($('.is-active.is-submenu-item').parent('ul').length == 0) {
            $('#menu-side_menu').foundation('down', $('#' + $('.is-active.is-accordion-submenu-parent').find('ul').attr('id')))
        }
    });
</script>

</body>
</html>
