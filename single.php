<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package resumee
 */
get_header(); ?>

	<div id="primary" class="content-area single_post_page">
		<main id="main" class="site-main" role="main">

		<?php
		while ( have_posts() ) : the_post(); ?>

			<?php get_template_part( 'template-parts/content-single', get_post_format() ); ?>

			<?php the_post_navigation();

			// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

		<section class="footer-widget">
	        <?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('footer-1') ) :   endif; ?>
	        <div class="clearfix"></div>
	    </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php
//get_sidebar();
get_footer();
