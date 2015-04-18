<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package _mbbasetheme
 */
?>

	</div><!-- #content -->

	<footer id="colophon" class="site-footer" role="contentinfo">
		<div class="site-info">
			<div class="searchform">
			<?php get_search_form(); ?>
			</div>
			<div class="columns">
				<div class="oneoffour">
					<ul>
					<lh><?php the_widget( 'WP_Widget_Recent_Posts' ); ?></lh>
					</ul>
				</div>
				<div class="oneoffour">
					<lh>Contacter Fred</lh>
				</div>
				<div class="oneoffour">
					<ul>
						<lh>Réseaux sociaux</lh>
						<li>Facebook</li>
						<li>Twitter</li>
						<li>Pinterest</li>
						<li>Instagram</li>
					</ul>
				</div>
				<div class="oneoffour">
					<ul>
					<lh>Mentions légales</lh>
					<li>Site web: <a href="http://colm.be">Colm O'Neill</a></li>
					<li>Graphisme: <a href="http://alicedc.fr/">Alice Dillon Corneck</a></li>
					</ul>
				</div>
			</div>
			<p class="copyright"><?php echo date( "Y" ); echo "&nbsp; Fred & breakfast"; ?></p>
		</div><!-- .site-info -->
	</footer><!-- #colophon -->
</div><!-- #page -->

<?php wp_footer(); ?>

</body>
</html>
