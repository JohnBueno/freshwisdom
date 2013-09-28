<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after. Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage Twenty_Ten
 * @since Twenty Ten 1.0
 */
?>
	</div><!-- #main -->

	<div id="footer" role="contentinfo">
		<div class="container">
			<div class="row">
				<div class="span6">
					<ul>
						<li><a href="<? bloginfo('url'); ?>">home</a></li>
						<li><a href="<? bloginfo('url'); ?>/about">about</a></li>
						<li><a href="<? bloginfo('url'); ?>/blog">blog</a></li>
						<li><a href="<? bloginfo('url'); ?>/contact">contact</a></li>
					</ul>
				</div>
				
				<div class="span6 copyright">
					 <p>&copy;All content Reginald Hall, Jr. 2012</p>
				</div>
			
			</div>
		</div>
	</div><!-- #footer -->

</div><!-- #wrapper -->

<?php
	/* Always have wp_footer() just before the closing </body>
	 * tag of your theme, or you will break many plugins, which
	 * generally use this hook to reference JavaScript files.
	 */

	wp_footer();
?>
</div>
</body>
</html>
