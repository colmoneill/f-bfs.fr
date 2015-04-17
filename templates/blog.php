<?php
/**
 * Template Name: Blog
 *
 *
 * @package _mbbasetheme
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">
		<div class="post-list-container">
		<?php $myposts = get_posts('');
		foreach($myposts as $post) :
		setup_postdata($post); ?>
			<div class="post-list">
				<div class="single-post-info">
					<h1 class="post-title">
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h1>
					<p class="post-meta">Posted by <?php the_author(); ?></p>
					<small><?php _mbbasetheme_posted_on(); ?></small>

				</div>
				<hr>
		<?php endforeach; wp_reset_postdata(); ?>
			</div>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
