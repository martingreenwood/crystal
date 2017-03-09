<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package crystal
 */

?>

<section class="container">
	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
	</header>
</section>

<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

	<div class="column span6">
		<div class="entry-content">
			<?php the_content(); ?>
		</div>
	</div>

	<div class="column span6">
		<?php 
			$form_object = get_field('form_selector');
		    gravity_form_enqueue_scripts($form_object['id'], true);
		    gravity_form($form_object['id'], false, false, false, '', true, 1); 
		?>
	</div>

</article>
