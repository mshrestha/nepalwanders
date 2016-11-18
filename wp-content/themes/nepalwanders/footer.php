<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package nepalwanders
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<a href="<?php echo esc_url( __( 'https://wordpress.org/', 'nepalwanders' ) ); ?>"><?php printf( esc_html__( 'Proudly powered by %s', 'nepalwanders' ), 'WordPress' ); ?></a>
			<span class="sep"> | </span>
			<?php printf( esc_html__( 'Theme: %1$s by %2$s.', 'nepalwanders' ), 'nepalwanders', '<a href="http://underscores.me/" rel="designer">Underscores.me</a>' ); ?>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/jquery-1.11.2.min.js"></script>
<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/vendor/bootstrap.min.js"></script>

<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
