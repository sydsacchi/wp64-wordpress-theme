<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package wp64
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main">

		<?php
		if ( have_posts() ) :

			if ( is_home() && ! is_front_page() ) : ?>
				
				<header>
					<h1 class="page-title screen-reader-text"><?php single_post_title(); ?></h1>
				</header>							

			<?php
			endif;
			
			if ( is_home() && is_front_page() ) : ?>
				
				<div class="homeLoad">
					<p>Ready.<br>
					Load"$",8</p>
					<p>Searching for $<br>
					Loading<br>
					Ready.<br>
					List</p>
				</div>
				<div class="homeList">
					<span class="preList"></span><p><span class="latestPosts">Latest Posts</span></p><span class="postListPosts"></span>
				</div>
			<?php
			endif;

			/* Start the Loop */
			while ( have_posts() ) : the_post(); ?>				
				<?php

				/*
				 * Include the Post-Format-specific template for the content.
				 * If you want to override this in a child theme, then include a file
				 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
				 */
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>
			<p class="blocksfree">664 blocks free.</p>
			<p class="ready">Ready.<br></p>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php
get_sidebar();
get_footer();
