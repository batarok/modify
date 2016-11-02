<?php
/**
 * The template for displaying the footer
 *
 * Contains footer content and the closing of the #main and #page div elements.
 *
 * @package WordPress
 * @subpackage Twenty_Fourteen
 * @since Twenty Fourteen 1.0
 */
?>
		</div><!-- #main -->

		<footer id="colophon" class="site-footer" role="contentinfo">

			<?php get_sidebar( 'footer' ); ?>

<div class="kolom1">
<a href="../contact-us">Contact Us</a>
<a href="../sitemap">Sitemap</a>
</div>
			
			<div class="site-info">
				<?php do_action( 'twentyfourteen_credits' ); ?>
<a href="<?php echo get_site_url(); ?>"/>				
<script type='text/javascript'>
var site = '<?php bloginfo('name'); ?>';
var cur = 2016;
var year = new Date();
if(cur == year.getFullYear()) year = year.getFullYear(); else year = cur + ' - '+ year.getFullYear(); document.write(site,' © ',year,' |');
</script>
				<a href="<?php echo esc_url( __( 'https://openshift.redhat.com/', 'twentyfourteen' ) ); ?>"><?php printf( __( 'Powered by %s', 'twentyfourteen' ), 'OpenShift' ); ?></a>


			</div><!-- .site-info -->



		</footer><!-- #colophon -->
	</div><!-- #page -->

	<?php wp_footer(); ?>

</body>
</html>