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
					<li>T: 01234 567 890 F: 01234 567 890 </li>
					<li>E: HELLO@CRYSTALCLEANING.COM</li>
					<li>A: 123 ROADNAME HERE, MALVERN, WR1 123</li>
				</ul>
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
