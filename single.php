<?php
/**
 * The Template for displaying all single posts.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div class="span6 offset1">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1><? the_title(); ?></h1>
				<? the_content(); ?>
				<?php comments_template(); ?>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
