<?php
/**
 * Template Name: Reservations
 *
 * For reservation page, of course.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

<style type="text/css">
	div.site-branding{
		background: url(<?php bloginfo('template_directory'); ?>/assets/img/FBLOGOrouge.png);
		background-repeat: no-repeat;
		background-size: contain;
	}
	.container div#repeaters h2{
		border-bottom: 2px solid #b94149;
	}
</style>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="hero-container">
					<img class="hero" src="<?php the_field('full_width_image'); ?>" />
				</div>

				<div class="title">
						<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
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
					<div class="calendars">
						<div class="center-calendar">
							<h2>Cuisine</h2>
							<?php echo do_shortcode('[dopbsp id=3]'); ?>
						</div>
						<div class="left-calendar">
							<h2>Studio</h2>
							<p>1&#151;2 ppl</p>
							<?php echo do_shortcode('[dopbsp id=1]'); ?>
						</div>
						<div class="right-calendar">
							<h2>Appartement</h2>
							<p>1&#151;4 ppl</p>
							<?php echo do_shortcode('[dopbsp id=2]'); ?>
						</div>
					</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
