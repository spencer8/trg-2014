<?php
/*
Template Name: Menus Page
*/

get_header(); ?>

	<?php /* The loop */ ?>
	<?php while ( have_posts() ) : the_post(); ?>
	<article class="menu-group">
		<h1><?php the_title(); ?></h1>
		<div class="intro"><?php the_content(); ?></div>
	</article>
	
		<?php 
		// check for rows (parent repeater)
		if( get_field('menu_section') ): ?>

			<?php 
			// loop through rows (parent repeater)
			while( has_sub_field('menu_section') ): ?>

	<article class="menu-group">
		<?php if(get_sub_field('section_title')){ ?>
		<h2 class="ghead"><span><?php the_sub_field('section_title'); ?></span></h2>
		<?php } ?>
		<p class="intro"><?php the_sub_field('section_note'); ?></p>
		<div class="menu-section">

				<?php 
				// check for rows (sub repeater)
				if( get_sub_field('menu_item') ): ?>

		
					<?php while( has_sub_field('menu_item') ): ?>
			<section class="menu-item cf">			 
				<div class="item-title">
					<h3><?php the_sub_field('title'); ?></h3>
					<h5 class="subheading"><?php the_sub_field('price'); ?></h5>
				</div>
				<p class="item-desc">
					<?php the_sub_field('desc'); ?>
				</p>
			</section>
			 
			    	<?php endwhile; ?>
				<?php endif; //if( get_sub_field('menu_item') ): ?>
		
		</div>	

			<?php endwhile; // while( has_sub_field('menu_section') ): ?>
	</article>
		<?php endif; // if( get_field('menu_section') ): ?>
	<div class="fineprint"><?php the_field('menu_footnote'); ?></div>
	<?php endwhile; // end of the loop. ?>


<?php get_footer(); ?>