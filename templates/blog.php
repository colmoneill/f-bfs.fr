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
			<h2>ARTICLES RECENTS</h2>
			</div>
		<?php $myposts = get_posts('');
		foreach($myposts as $post) :
		setup_postdata($post); ?>
			<div class="post-list">
				<div class="single-post-info">
					<?php if ( has_post_thumbnail() ) {
						$thumb_id = get_post_thumbnail_id();
						$thumb_url = wp_get_attachment_image_src($thumb_id,'medium', true); ?>
							<a href="<?php the_permalink() ?>">
							<div class='thumbnail' style='background:url(<?php print $thumb_url[0]; ?>) no-repeat center center; background-size:cover;'></div>
							</a>
						<?php } else { ?>
						<a href="<?php the_permalink() ?>">
						<div class="no-thumbnail"></div>
						</a>
						<?php } ?>
					<p class="category"><?php the_category('title_li='); ?></p>
					<h1 class="post-title">
						<a href="<?php the_permalink() ?>" title="<?php the_title_attribute(); ?>"><?php the_title(); ?></a>
					</h1>
					<hr>
					<p class="tags"><?php the_tags('' , ''); ?></p>
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
