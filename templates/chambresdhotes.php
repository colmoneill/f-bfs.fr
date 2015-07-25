<?php
/**
 * Template Name: Chambres d'hôtes
 *

 * @package _mbbasetheme
 */

get_header(); ?>

<style type="text/css">
	div.site-branding{
		background: url('<?php bloginfo('template_directory'); ?>/assets/img/FBLOGOvert.png');
		background-repeat: no-repeat;
		background-size: contain;
	}
	div.secondary-menu hr{
		color: green;
	}
</style>

<div class="container">
	<div class="secondary-menu">
		<hr>
			<ul>
			</ul>
		<hr>
	</div>
</div>
	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<?php while ( have_posts() ) : the_post(); ?>
				<?php
				if ( has_post_thumbnail() ) {
					$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
					echo '<div class="hero-container" style="background: url(' . $large_image_url[0] . ') no-repeat center center; background-size: cover;">';
				}
				else {
					echo '<div class="blog-hero no-img">';
				}
				?>
				<?php the_title( '<h1 class="entry-title">', '</h1>' ); ?>
				</div>

					<?php get_template_part( 'content', 'page' ); ?>

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
				<div class="rappels">
					<div class="rappel-cuisine">
						<?php
						$currentlang = get_bloginfo('language');
						if($currentlang=="en-GB"):?>
						<h2>Cooking classes</h2>
						<div class="rappel-cuisine-img">
							<br><br>
							<h3>Try out the cooking classes!</h3>
							<h4>&rarr; read up on the types of classes</h4>
						</div>
						<?php else: ?>
						<h2>Les cours de cuisine</h2>
						<div class="rappel-cuisine-img">
							<div class="rappel-img-inside-content">
							<h3>Essayez les cours de cuisine!</h3>
							<h4>&rarr; découvrir les formules</h4>
							</div>
						</div>
					<?php endif; ?>
					</div>
					<div class="rappel-blog">
						<h2>blog</h2>
						<!-- LOOP -->
						<?php $myposts = get_posts('posts_per_page=3');
						foreach($myposts as $post) :
						setup_postdata($post); ?>
							<div class="post-list">
								<div class="single-post-info">
									<?php if ( has_post_thumbnail() ) {
										$thumb_id = get_post_thumbnail_id();
										$thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true); ?>
											<a href="<?php the_permalink() ?>"><div class='thumbnail' style='background:url(<?php echo $thumb_url[0]; ?>) no-repeat center center'></div></a>
										<?php } else { ?>
										<a href="<?php the_permalink() ?>"><div class="no-thumbnail"></div></a><?php } ?>
									<p class="category"><?php the_category('title_li='); ?></p>
									<h1 class="post-title">
										<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
									</h1>
									<hr>
									<p class="tags"><?php the_tags('' , ''); ?></p>
								</div>
						<?php endforeach; wp_reset_postdata(); ?>
					</div>
				</div>
			</div>
			<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
