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
			 <form action="/" method="get">
				<fieldset>
					<label for="search"></label>
					<input type="text" name="s" id="search" value="<?php the_search_query(); ?>" />
					<input type="image" alt="&rarr; Rechercher" src="<?php bloginfo( 'template_url' ); ?>/images/search.png" />
				</fieldset>
			</form>
			</div>
			<div class="columns">
				<div class="oneoffour">
					<ul>
					<lh>latest post from the blog</lh>
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
