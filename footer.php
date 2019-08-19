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
	<div class="footer-grid">
		<?php dynamic_sidebar( 'footer-widgets' ); ?>
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
