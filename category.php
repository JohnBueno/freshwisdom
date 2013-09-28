<?php
/**
 * The template for displaying Category Archive pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		
	<div class="span6 offset1">
		<h1><?php printf( __( '%s', 'twentyten' ), '<span>' . single_cat_title( '', false ) . '</span>' ); ?></h1>
		
		<?php while ( have_posts() ) : the_post(); ?>
			<div class="post">
				<h2><? the_title(); ?></h2>
				<? the_excerpt(); ?>
			</div>
		<?php endwhile; // end of the loop. ?>
	
	</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
