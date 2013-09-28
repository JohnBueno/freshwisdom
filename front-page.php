<?php
/**
 * The template for displaying all pages.
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */

get_header(); ?>

		<div class="span6 offset1 content">
			<?php while ( have_posts() ) : the_post(); ?>
				<h1><? the_title(); ?></h1>
				<div id="info">
					<div id="gen-y" class="slide">
						<img src="<? bloginfo('template_url'); ?>/images/gen-y.png"/>
					</div>
					<div id="recession" class="slide">
						<img src="<? bloginfo('template_url'); ?>/images/recession.png"/>
					</div>
					<div id="growth" class="slide">
						<img src="<? bloginfo('template_url'); ?>/images/growth.png"/><br/>
						<a target="_blank" style="display:block; padding-right:5px; text-align:right; font-size:14px;" href="<? bloginfo('template_url'); ?>/images/fullsize-graphic.png">View Larger Image</a>
					</div>
				</div>
				<div id="push-up">
					<? the_content(); ?>
				</div>
			<?php endwhile; // end of the loop. ?>
		</div><!-- #container -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
