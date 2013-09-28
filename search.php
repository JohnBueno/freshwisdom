<?php
/**
 * The template for displaying Search Results pages.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div class="span6 offset1">

	<?php if ( have_posts() ) : ?>
				<h1 class="page-title"><?php printf( __( 'search results for: %s', 'twentyten' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				
				<?php while ( have_posts() ) : the_post(); ?>
					<div class="post">
						<h2><? the_title(); ?></h2>
						<? the_excerpt(); ?>
					</div>
				<?php endwhile; // end of the loop. ?>
	
	
	<?php else : ?>
				
	
				<div id="post-0" class="post no-results not-found">
					<h1 class="entry-title"><?php _e( 'nothing found', 'twentyten' ); ?></h1>
					
					
					<div class="entry-content">
						<p><?php _e( 'Sorry, but nothing matched your search criteria. Please try again with some different keywords.', 'twentyten' ); ?></p>
						<?php get_search_form(); ?>
					</div><!-- .entry-content -->
				
				
				</div><!-- #post-0 -->
<?php endif; ?>
		
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
