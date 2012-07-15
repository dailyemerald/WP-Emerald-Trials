<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
	
		<div id="footer_ad" style="width:468px;height:60px;padding:0;margin-top:0;margin-bottom:10px;margin-left: auto; margin-right:auto;">
		<?php echo CP_468x60(); // 728x60 px AD ?>
		</div>
	
		<div id="colophon">

<?php
	/* A sidebar in the footer? Yep. You can can customize
	 * your footer with four columns of widgets.
	 */
	get_sidebar( 'footer' );
?>

			<div id="site-info">
				<a href="<?php echo home_url( '/' ); ?>" title="<?php echo esc_attr( get_bloginfo( 'name', 'display' ) ); ?>" rel="home">
					&copy; <?php bloginfo( 'name' ); ?>
				</a>
			</div><!-- #site-info -->

			<div id="site-generator">
				<?php do_action( 'twentyten_credits' ); ?>
				<a href="<?php echo esc_url( __( 'http://wordpress.org/', 'twentyten' ) ); ?>" title="<?php esc_attr_e( 'Semantic Personal Publishing Platform', 'twentyten' ); ?>" rel="generator"><?php printf( __( 'Proudly powered by %s.', 'twentyten' ), 'WordPress' ); ?></a>
			</div><!-- #site-generator -->

		</div><!-- #colophon -->
	</div><!-- #footer -->

</div><!-- #wrapper -->

<script type='text/javascript' src='http://s.ppjol.net/pp.js'>
  {'zone':'E5bSgmqIao0HOyZaNNBBih', 'mode':'meter', 'debug':0}
</script>

<a href="https://mixpanel.com/f/partner"><img src="https://mixpanel.com/site_media/images/partner/badge_light.png" alt="Mobile Analytics" /></a>

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>

<script src="http://dev.dailyemerald.com:9500/socket.io/socket.io.js"></script>
<script src="http://dev.dailyemerald.com:9500/client.js"></script>
</body>
</html>
