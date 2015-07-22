<?php
/**
 * Template Name: Cours de cuisine
 *
 * Displays content for content page layouts
 *
 * @package _mbbasetheme
 */

get_header(); ?>

<style type="text/css">
	div.site-branding{
		background: url(<?php bloginfo('template_directory'); ?>/assets/img/FBLOGOvert.png);
		background-repeat: no-repeat;
		background-size: contain;
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
				<div class="calendars-container">
					<div class="calendars no-detail-display">
						<div class="title">
							<h1 class="entry-title">Reservations</h1>
						</div>
						<div class="center-calendar">
							<h2>Class1</h2>
							<p>1&#151;2 ppl</p>
							<?php echo do_shortcode('[dopbsp id="3"]'); ?>
							<a class="reservation-button" href="#">make a reservation</a>
						</div>
					</div>
				</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
