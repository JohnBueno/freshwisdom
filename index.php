<?php
/**
 * The main template file.
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>
	
	<div class="span6 offset1 content">
		<h1>blog</h1>
		
		<? 
			$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
			$wp_query = new WP_Query("paged=$paged&posts_per_page=10");
		?>
		
		<?php if ($wp_query->have_posts()) : ?>
		<?php 
		$i=0;
		while ($wp_query->have_posts()) : $wp_query->the_post(); ?>

			<div class="post clearfix" <? if($i+1 == $wp_query->found_posts || $i==9){echo('style="border-bottom:none;"');} ?>>
				<h2><a href="<? the_permalink(); ?>"><? the_title(); ?></a></h2>
				<? if(get_the_post_thumbnail()): ?>
				<div class="thumbnail">
					<?php the_post_thumbnail('post'); ?>
				</div>
				
				<div class="excerpt">
					<? the_excerpt(); ?>
				</div> 
				
				<? else: ?>
					<? the_excerpt(); ?>
				<? endif; ?>
							
			</div>
	
		<?php 
		$i++;
		endwhile; ?>
		<div class="pagination clearfix">
			<div class="nav-previous"><?php next_posts_link( __( '<span class="meta-nav">&larr;</span> Older posts', 'twentyten' ) ); ?></div>
			<div class="nav-next"><?php previous_posts_link( __( 'Newer posts <span class="meta-nav">&rarr;</span>', 'twentyten' ) ); ?></div>
		</div>
		<? endif; ?>
		
		<? wp_reset_postdata(); ?>
		
	</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
