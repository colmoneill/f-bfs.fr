<?php
/**
 * The template for displaying all single posts.
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

		<?php while ( have_posts() ) : the_post(); ?>
			<!--
			<?php the_post_thumbnail( 'thumbnail', array( 'src' => $src, ) ); ?>
		-->
		<?php
		if ( has_post_thumbnail() ) {
			$large_image_url = wp_get_attachment_image_src( get_post_thumbnail_id(), 'full' );
			echo '<div class="blog-hero" style="background: url(' . $large_image_url[0] . ') no-repeat center center; background-size: cover;"></div>';
		}
		else {
			echo '<div class="blog-hero no-img"></div>';
		}
		?>
			<?php get_template_part( 'content', 'single' ); ?>

			<div class="post-post-nav">
				<?php _mbbasetheme_post_nav(); ?>
			</div>
			<?php
				// If comments are open or we have at least one comment, load up the comment template
				if ( comments_open() || '0' != get_comments_number() ) :
					comments_template();
				endif;
			?>

		<?php endwhile; // end of the loop. ?>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
