<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package xacuti
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<?php // translators:  1: software name (wordpress). ?>
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'xacuti' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'xacuti' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php // translators:  1: theme name, 2: developer name. ?>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'xacuti' ), 'xacuti', '<a href="https://automattic.com/" rel="designer">WordPressGoa</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
