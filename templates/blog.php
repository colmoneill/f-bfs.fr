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
			<div class="post_categories">
				<ul>
					<?php wp_list_categories('title_li='); ?>
				</ul>
			</div>
		<?php $myposts = get_posts('');
		foreach($myposts as $post) :
		setup_postdata($post); ?>
			<div class="post-list">
				<div class="single-post-info">
					<h1 class="post-title">
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h1>
					<p><?php the_tags(); ?></p>
					<!--
					<p class="post-meta">Posted by <?php the_author(); ?></p>
					<small><?php _mbbasetheme_posted_on(); ?></small>
				-->
				</div>
		<?php endforeach; wp_reset_postdata(); ?>
			</div>
			<?php the_tags(); ?>
		</div>
		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_sidebar(); ?>
<?php get_footer(); ?>
