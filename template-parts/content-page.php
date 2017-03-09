<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package crystal
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class('container inner'); ?>>

	<header class="entry-header">
		<h1><?php the_title(); ?></h1>
	</header>

	<div class="entry-content">
		<?php the_content(); ?>
	</div>

</article>
