<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package crystal
 */

?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info container">

			<div class="logo">
				<img src="<?php echo get_template_directory_uri(); ?>/assets/logo.svg" alt="">
			</div>
			<div class="contact">
				<ul class="aligncenter">
					<li>T: 07465 659 585 </li>
					<li>E: <?php echo antispambot( "hello@fineclean.co.uk"); ?></li>
					<li>A: St. Johns, Worcester</li>
				</ul>
				<div class="social">
					<ul>
						<li><a href="https://www.facebook.com/finecleann/" target="_blank"><i class="fa fa-facebook" aria-hidden="true"></i>
</a></li>
						<li><a href="https://www.instagram.com/finecleann/" target="_blank"><i class="fa fa-instagram" aria-hidden="true"></i>
</a></li>
						<li><a href="https://www.twitter.com/finecleann/" target="_blank"><i class="fa fa-twitter" aria-hidden="true"></i>
</a></li>
				</div>
			</div>
			<div class="copyright">
				<p class="aligncenter">Copyright <?php echo bloginfo( 'name' ); ?> <?php echo date('Y'); ?>. <a rel="credit" target="_blank" href="http://wearebeard.com">Website by WEAREBEARD</a>.</p>
			</div>

		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
