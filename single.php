<?php
/**
 * The template for displaying all single posts
 *
 */

get_header(); ?>

    <?php /* The loop */ ?>
    <?php while ( have_posts() ) : the_post(); ?>
        <?php get_template_part( 'partials/content' ); ?>
    <?php endwhile; // end of the loop. ?>

<?php get_footer(); ?>