<?php
/**
 * The Header for our theme.
 *
 * Displays all of the <head> section and everything up till <div id="main">
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="description" content="I created FreshWisdom as a resource for like-minded people in their twenties to use advice, find mentors, and apply strategies that are actually helpful to create life direction. Join me in my personal mission to live boldly, feel confident, and create a life without limits." />
<meta name="keywords" content=""/>

<meta property="og:type" content="website"/>
<meta property="og:image" content="<?php bloginfo( 'template_directory' ); ?>/images/facebook.png"/>
<meta property="og:site_name" content="freshwisdomonline.com"/>
<meta property="fb:admins" content="24404043"/>
<?php if (is_front_page()) : ?>
    <meta property="og:title" content="Fresh Wisdom"/>
    <meta property="og:url" content="http://www.freshwisdomonline.com"/>
    <meta property="og:description" content="I created FreshWisdom as a resource for like-minded people in their twenties to use advice, find mentors, and apply strategies that are actually helpful to create life direction. Join me in my personal mission to live boldly, feel confident, and create a life without limits."/>
<?php elseif (is_single() || is_page()) : ?>
	<meta property="og:title" content="Fresh Wisdom | <?php the_title(); ?>"/>
    <meta property="og:url" content="<?php the_permalink(); ?>"/>
    <meta property="og:description" content="<?php the_excerpt();?>"/>

<?php elseif (!is_front_page() && !is_single() && !is_page()) : ?>   
<meta property="og:title" content="<?php echo trim(wp_title("", false)); ?>"/>
<?php endif ?> 


<title><?php
	/*
	 * Print the <title> tag based on what is being viewed.
	 */
	global $page, $paged;

	wp_title( '|', true, 'right' );

	// Add the blog name.
	bloginfo( 'name' );

	// Add the blog description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		echo " | $site_description";

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		echo ' | ' . sprintf( __( 'Page %s', 'twentyten' ), max( $paged, $page ) );

	?></title>
<link rel="profile" href="http://gmpg.org/xfn/11" />
<link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/bootstrap.css" />
<link rel="stylesheet" type="text/css" href="<?php bloginfo( 'template_url' ); ?>/jquery.fancybox.css" />
<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.2/jquery.min.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.cycle.all.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/jquery.fancybox.pack.js"></script>
<script type="text/javascript" src="<?php bloginfo( 'template_url' ); ?>/js/main.js"></script>

<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
<?php
	/* We add some JavaScript to pages with the comment form
	 * to support sites with threaded comments (when in use).
	 */
	if ( is_singular() && get_option( 'thread_comments' ) )
		wp_enqueue_script( 'comment-reply' );

	/* Always have wp_head() just before the closing </head>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to add elements to <head> such
	 * as styles, scripts, and meta tags.
	 */
	wp_head();
?>
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'UA-35419331-1']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
</head>

<body <?php body_class(); ?>>

<div id="header">
	<div class="social">
		<div class="container">
			<div class="row">
				<div class="span3 offset9">
					<!-- <a target="_blank" href="#">facebook</a> -->
					<a target="_blank" href="http://twitter.com/FreshWisdomLive">twitter</a>
				</div>
			</div>
		</div>
	</div>
	<div class="headerContainer">
		<div class="container">
			<div class="row">
				<div class="span4">
					<a class="logo" href="<? bloginfo('url'); ?>">Fresh Wisdom</a>
				</div>
				<div class="tagline span4 offset4">
					<p>Find your direction. Be Authentic. Live Happy.</p>
				</div>
			</div>
		</div>
	</div>
</div><!-- #header -->


<?php 
$args = array(
	'type'                     => 'post',
	'child_of'                 => 0,
	'parent'                   => '',
	'orderby'                  => 'name',
	'order'                    => 'ASC',
	'hide_empty'               => 1,
	'hierarchical'             => 1,
	'exclude'                  => 1,
	'taxonomy'                 => 'category',
	'pad_counts'               => false );
	
	 $categories = get_categories( $args );

?>

<div class="container">
	<div id="wrapper" class="hfeed">
		<div class="row navigation">
			<div class="span11 offset1">
				
				<?php wp_nav_menu(array(
					'menu' => 'Main', 
					'container' => false
					)); ?> 
				
				<!--
<ul>
					<li class="about hover">
						<a href="<? bloginfo('url') ?>/about">About</a>
					</li>
					
					<li class="blog <?php if(is_home()){echo('hover');} ?>">
						<a href="<? bloginfo('url') ?>/blog">Blog</a>
						<ul class="dropdown">
						<? foreach($categories as $cat): ?>
							<li>
								<a href="<? bloginfo('url') ?>/category/<? echo($cat->slug); ?>">
								<? echo($cat->name); ?>
								</a>
							</li>
						<? endforeach; ?>
						</ul>
					</li>
					
					<li class="contact hover">
						<a href="<? bloginfo('url') ?>/contact">Contact</a>
					</li>
					
					<li class="about hover">
						<a href="<? bloginfo('url') ?>/meetups">Meet Ups</a>
					</li>
				</ul>
-->
			</div>
		</div>
		
		<div class="row categories">
			<div class="span11 offset1">
				<?php if(is_home() || is_category()): ?>
				<ul>
				<? foreach($categories as $cat): ?>
					<li>
						<a href="<? bloginfo('url') ?>/category/<? echo($cat->slug); ?>">
						<? echo($cat->name); ?>
						</a>
					</li>
				<? endforeach; ?>
				</ul>
				<?php endif; ?>
			</div>	
		</div>
		
		<div class="row">
