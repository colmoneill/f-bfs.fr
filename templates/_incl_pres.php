<!-- secondary menu category extract -->
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

<!-- start the page with the featured image -->
<div id="primary" class="content-area">
	<main id="main" class="site-main" role="main">
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

		<!-- nested repeaters of presentation modules -->
		<?php
		$counter = 0;
			if( have_rows('module_de_presentation') ): ?>
				<section class="container">
				<div id="repeaters">
				<?php while( have_rows('module_de_presentation') ): the_row(); ?>
					<div class="module" id="<?php the_sub_field('title_of_section'); ?>">
						<header class="titles">
						<h2><?php the_sub_field('title_of_section'); ?></h2>
						<h4><?php the_sub_field('subtitle_of_section'); ?></h4>
						</header>

					<?php
					if( have_rows('gallery_of_section') ):
						echo ' <div id="slider_container';
						print $counter++;
						echo '">';
						?>
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
							<div class="section_technical"><?php the_sub_field('technical_details'); ?>
								<div class="end-separation"></div>
							</div>
						</div>


					</div>
				<?php endwhile; ?>
				</div>
				</section>
			<?php endif; ?>

	</main><!-- #main -->
</div><!-- #primary -->


<div id="content-sidematter" class="widget-area" role="complementary">
	<?php dynamic_sidebar( 'sidebar-1' ); ?>
</div>
