<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp64
 */	
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header">
		<?php
		if ( is_singular() ) :
			the_title( '<h1 class="entry-title">', '</h1>' );
		else :
			the_title( '<span class="preList"></span><h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2><span class="postList"></span>' );
		endif;
		
		if ( 'post' === get_post_type() ) : ?>
		<?php
			if ( is_singular() ) : ?>
				<div class="entry-meta">
					<?php
						wp64_posted_on();
						wp64_posted_by();
					?>
				</div><!-- .entry-meta -->			
		<?php
			else: ?>
		<?php
			endif;
		endif; ?>
	</header><!-- .entry-header -->	

	<?php 
		if ( is_singular() ) : 
			wp64_post_thumbnail(); 
		else : "";
		endif;
	?>
	
	<?php if ( is_singular() ) : ?>
	
		<div class="entry-content">
			<?php
				the_content( sprintf(
					wp_kses(
						/* translators: %s: Name of current post. Only visible to screen readers */
						__( 'Continue reading<span class="screen-reader-text"> "%s"</span>', 'wp64' ),
						array(
							'span' => array(
								'class' => array(),
							),
						)
					),
					get_the_title()
				) );

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'wp64' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->

		<footer class="entry-footer">
			<?php wp64_entry_footer(); ?>
		</footer><!-- .entry-footer -->
	<?php else: ?>
	<?php endif; ?>
</article><!-- #post-<?php the_ID(); ?> -->
