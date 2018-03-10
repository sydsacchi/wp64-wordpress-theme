<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package wp64
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer">
		<div class="site-info">
			<?php if( get_theme_mod( 'footer_text_block') != "" ) { ?>
				<?php echo get_theme_mod( 'footer_text_block'); ?>
			<?php } else { ?>
				<p align="center">Copyright &copy; 2018 · WP64 Theme · By: <a href="https://www.sidneysacchi.com" target="_blank" title="Web Design &amp; Web Consulting">Sidney Sacchi</a> · A tribute to Commodore 64 · Based on <a href="http://underscores.me/">Underscores.me</a> Theme<br />Credits and Thanks to: <a href="http://style64.org/" target="_blank">http://style64.org/</a> for the font</p>				
			<?php } ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
