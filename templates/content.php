<?php
/**
 * Template Name: content
 *
 * Displays content for content page layouts
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="hero-container">
					<img class="hero" src="<?php the_field('full_width_image'); ?>" />
				</div>
				<div class="article-sidematter">
				<?php get_template_part( 'content', 'page' ); ?>

				<?php if ( ! is_active_sidebar( 'sidebar-1' ) ) {
					return;
				}
				?>
				<div id="sidematter" class="widget-area" role="complementary">
				<?php dynamic_sidebar( 'sidebar-1' ); ?>
				</div>
				</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
