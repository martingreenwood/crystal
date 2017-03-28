<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package crystal
 */

get_header(); ?>

	<div id="slider">
		<div class="container">
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
			<?php else: ?>
			<div class="slides">
				<div class="slide">
					<?php the_post_thumbnail( 'ful' ); ?>
					<div class="caption">
						<h2><?php echo get_post(get_post_thumbnail_id())->post_excerpt; ?></h2>
						<p><?php echo get_post(get_post_thumbnail_id())->post_content; ?></p>
					</div>
				</div>
			</div>
			<?php endif; ?>
		</div>
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
				get_template_part( 'template-parts/content', get_post_format() );

			endwhile;

			the_posts_navigation();

		else :

			get_template_part( 'template-parts/content', 'none' );

		endif; ?>

		</main>

		<?php 
			get_template_part( 'partials/services', 'boxes' );
		?>

	</div>

<?php
get_footer();
