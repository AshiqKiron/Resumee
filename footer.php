<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package resumee
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php printf( esc_html__( 'Theme: %1$s by %2$s', 'resumee' ), 'Resumee', '<a href="https://asphaltthemes.com/" rel="designer">Asphalt Themes</a>' ); ?>
		</div><!-- .site-info -->
		<div class="footer_address">
			<span><?php echo do_shortcode(esc_attr(get_option( 'colophon_txt' , esc_html__(' Contact : Seasame Street, 1st Floor San Francisco, CA 12345' , 'resumee'))));?></span>
		</div>
		<a href="#" class="scrolltotop"><i class="fa fa-chevron-up"></i></a>
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
