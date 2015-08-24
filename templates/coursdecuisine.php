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

<?php while ( have_posts() ) : the_post(); ?>

<?php require_once '_incl_pres.php'; ?>


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

<?php get_sidebar(); ?>
<?php get_footer(); ?>
