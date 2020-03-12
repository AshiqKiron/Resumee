<?php
/**
 * Template part for displaying posts
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package resumee
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	
	<div class="entry-content">
		<div class="post_featured_image">
			<?php	if ( has_post_thumbnail() ) {
				the_post_thumbnail();
			}
			else {
				echo '<div class="hide_featured_image"></div>';
			} ?>
	</div>

	<!-- post wrap-->
	<div class="post_wrap">

		<!-- entry-meta -->
		<div class="entry-meta">
			<?php resumee_posted_on(); ?>
		</div>
		<!-- entry-meta -->

		<div class="post_others">

			<!-- .entry-header -->
			<header class="entry-header">
				<?php
				if ( is_single() ) :
					the_title( '<h1 class="entry-title">', '</h1>' );
				else :
					the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
				endif;

				if ( 'post' === get_post_type() ) : ?>
				
					<?php //resumee_posted_on(); ?>
				
				<?php
				endif; ?>
			</header>
			<!-- .entry-header -->

			<!-- .entry-content -->
			<div class="entry-content">
				<?php
					

					?> <p><?php echo substr(get_the_excerpt(), 0,500); ?>...</p>

                    <div class="learn_more"><a href="<?php the_permalink(); ?>"><?php _e('Continue' , 'resumee'); ?></a>   </div> <?php 

				?>
			</div>
			<!-- .entry-content -->

			<!-- entry-footer -->
			<footer class="entry-footer">
				<?php resumee_entry_footer(); ?>
			</footer>
			<!-- entry-footer -->

		</div>
	</div>
	<!-- post wrap-->
</article><!-- #post-## -->
