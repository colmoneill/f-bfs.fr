<?php
/**
 * Template Name: Chambres d'hôtes
 *
 * Displays content for content page layouts
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<div class="hero-container" style="background-image: url(<?php the_field('full_width_image'); ?>) ">
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
						<div class="left-calendar">
							<h2>Studio</h2>
							<p>1&#151;2 ppl</p>
							<?php echo do_shortcode('[dopbsp id=1]'); ?>
							<div class="reserv-button">
								<a class="reservation-button" href="#">make a reservation</a>
							</div>
						</div>
						<div class="right-calendar">
							<h2>Appartement</h2>
							<p>1&#151;4 ppl</p>
							<?php echo do_shortcode('[dopbsp id=2]'); ?>
							<div class="reserv-button">
								<a class="reservation-button" href="#">make a reservation</a>
							</div>
						</div>
					</div>
				</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
