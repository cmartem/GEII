<?php
/**
 * The template for displaying all single posts and pages
 *
 * @package vitae
 * @since vitae 1.0.0
 * @license GPL 2.0
 * 
 */
get_header(); ?>

	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

		<h1><?php the_title(); ?></h1> 

		<?php the_content();?>

	<?php endwhile; else: ?>

		<p>Nope.</p>

	<?php endif; ?>

<?php get_footer(); ?>