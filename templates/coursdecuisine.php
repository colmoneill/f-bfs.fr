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

<section class="container">
	<div class="secondary-menu">
	<?php if ( have_rows('module_de_presentation') ): ?>
		<hr>
			<ul>
				<?php while( have_rows('module_de_presentation') ): the_row(); ?>
					<li><a href="#<?php the_sub_field('title_of_section'); ?>"> <?php the_sub_field('title_of_section'); ?></a></li>
				<?php endwhile; ?>
			</ul>
		<hr>
	<?php endif; ?>
	</div>
</section>

<!-- Jssor Slider Begin -->
<!-- To move inline styles to css file/block, please specify a class name for each element. -->


<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
		<?php while ( have_posts() ) : the_post(); ?>
			<div
				<?php
				if ( has_post_thumbnail() ) {
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
					echo ' class="hero-container" style="background: url(' . $large_image_url[0] . ') no-repeat center center; background-size: cover;">';
				}
				else {
					echo ' class="hero-container no-img">';
				}
				?>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
			</div>

		<?php
			if( have_rows('module_de_presentation') ): ?>
				<section class="container">
				<div id="repeaters">
				<?php while( have_rows('module_de_presentation') ): the_row(); ?>
					<div class="module" id="<?php the_sub_field('title_of_section'); ?>">
						<header class="titles">
						<h2><?php the_sub_field('title_of_section'); ?></h2>
						<h4><?php the_sub_field('subtitle_of_section'); ?></h4>
						</header>
					
					<?php	if( have_rows('gallery_of_section') ): ?>
						<div id="slider_container">
							<div class="slides" u="slides">
								<?php while( have_rows('gallery_of_section') ): the_row(); ?>
									<div style="background: url(<?php the_sub_field('gallery_images') ?>)" class="the-slide we-ll-see" ></div>
								<?php endwhile; ?>
							</div>
						</div>
					<?php endif; ?>

					<div class="left-col">
						<?php if( have_rows('public_comments') ): ?>
								<?php while( have_rows('public_comments') ): the_row(); ?>
									<div class="side-comment">
										<a href="<?php the_sub_field('link_to_content') ?>">
										<p class="comment"><?php the_sub_field('visitors_comment') ?></p>
										<p class="visitor"><?php the_sub_field('visitors_details') ?></p>
										</a>
									</div>
								<?php endwhile; ?>
						<?php endif; ?>
					</div>

						<div class="the_article">
							<div class="section_content"><?php the_sub_field('section_body_text'); ?></div>
							<div class="section_technical"><?php the_sub_field('technical_details'); ?></div>
						</div>


					</div>
				<?php endwhile; ?>
				</div>
				</section>
			<?php endif; ?>

		<?php endwhile; ?>

<!--
		<div id="sidematter" class="widget-area" role="complementary">
			<?php dynamic_sidebar( 'sidebar-1' ); ?>
		</div>
-->
<!--
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
-->

	</main><!-- #main -->
</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
