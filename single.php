<?php
/**
 * The template for displaying all single posts.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

<div class="container">
	<div class="secondary-menu">
		<hr>
			<ul>
				<?php wp_list_categories('title_li='); ?>
			</ul>
		<hr>
	</div>
</div>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
			<section class="container">
				<?php while ( have_posts() ) : the_post(); ?>
					<?php if ( has_post_thumbnail() ) {
           $large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
           echo '<div class="blog-hero" style="background: url(' . $large_image_url[0] . ') no-repeat center center; background-size: cover;"></div>';
          }
          else {
                  echo '<div class="blog-hero no-img"></div>';
          }
          ?>

				<?php get_template_part( 'content', 'single' ); ?>
			</section><!-- container -->
					<div class="post-post-nav">
						<?php _mbbasetheme_post_nav(); ?>
					</div>
			<div class="container">
					<?php comments_template(); ?>
			</div><!-- container -->
			<?php endwhile; // end of the loop. ?>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
