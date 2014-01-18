<?php
/*
Template Name: Press Page
*/

get_header(); ?>

<div role="main" class="wrap">
	<?php /* The loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<article class="menu-group">
		<div class="intro"><?php the_content(); ?></div>
	</article>
	
		<?php 
		// check for rows (repeater)
		if( get_field('press') ): ?>

	<article class="menu-group">
		<div class="menu-section">
		
			<?php while( has_sub_field('press') ): ?>
			<section class="menu-item cf">			 
				<div class="item-title">
					<h3><?php the_sub_field('title'); ?></h3>
					<h5 class="subheading"><?php the_sub_field('date'); ?></h5>
				</div>
				<p class="item-desc">
					<?php the_sub_field('excerpt'); ?>
					<?php if( get_sub_field('link') ) { ?>
					<br><a target="_blank" href="<?php the_sub_field('link'); ?>" class="readmore">read more...</a>
					<?php } ?>
				</p>
			</section>
			 
	    	<?php endwhile; ?>
		
		</div>	
	</article>
	<?php endif; // if( get_field('menu_section') ): ?>

	<?php endwhile; // end of the loop. ?>

</div><!--End role=main-->

<?php get_footer(); ?>