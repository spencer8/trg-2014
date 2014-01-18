<?php
/**
 * The default template for displaying content
 *
 * Used for singles and maybe pages.
 *
 */
?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="article-header tcrd">
		<h1><?php the_title(); ?></h1>
	</header>
	<div class="pcont entry-content">
		<?php the_content(); ?>
	</div>
</article><!-- #post -->
