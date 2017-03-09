<?php
/**
 * Template part for displaying page content in front-page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package crystal
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container'); ?>>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

</article>
