<?php
/**
 * The template for displaying the contact page
 *
 *
 * @package crystal
 */

get_header(); ?>

	<div id="slider">
		<?php if (!get_field( 'Wide_Feature_Image' )): ?>
		<div class="container">
		<?php endif; ?>
			<?php  $slider = get_field('slider'); if( $slider ): ?>
			<div class="slides">
			<?php foreach( $slider as $slide ): ?>
				<div class="slide">
					<img src="<?php echo $slide['url']; ?>" alt="<?php echo $slide['alt']; ?>" />
					<div class="caption">
						<h2><?php echo $slide['caption']; ?></h2>
						<p><?php echo $slide['description']; ?></p>
					</div>
				</div>
			<?php endforeach; ?>
			</div>
			<?php elseif(has_post_thumbnail()): ?>
			<div class="slides">
				<div class="slide">
					<?php the_post_thumbnail( 'cover' ); ?>
				</div>
			</div>
			<?php endif; ?>
		<?php if (!get_field( 'Wide_Feature_Image' )): ?>
		</div>
		<?php endif; ?>
	</div>


	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php
			if ( have_posts() ) :

				/* Start the Loop */
				while ( have_posts() ) : the_post();

					/*
					 * Include the Post-Format-specific template for the content.
					 * If you want to override this in a child theme, then include a file
					 * called content-___.php (where ___ is the Post Format name) and that will be used instead.
					 */
					get_template_part( 'template-parts/content', 'contact' );

				endwhile;

				the_posts_navigation();

			else :

				get_template_part( 'partials/services', 'boxes' );

			endif; ?>

		</main>

		<?php if (get_field( 'enable_cta' )): ?>

		<section id="cta" class="parallax-window" data-parallax="scroll" data-image-src="<?php the_field( 'cta_background' ); ?>">
			<div class="overlay">
				<div class="container">

					<?php the_field( 'cta_content' ); ?>

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
			</div>
		</section>

		<?php endif; ?>

	</div>

<?php
get_footer();
