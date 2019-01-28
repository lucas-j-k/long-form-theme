<?php get_header(); ?>




	<main role="main" class="single-long-form">
	<!-- section -->
	<section>

	<?php if (have_posts()): while (have_posts()) : the_post(); ?>

		<!-- article -->
		<article id="post-<?php the_ID(); ?>" <?php post_class("single-long-form__article single-article"); ?>>

			<div class="single-long-form__header" style="background-image:url('<?php echo get_the_post_thumbnail_url(); ?>')">	
				<h1 class="single-long-form__title">
					<span class="date"><?php the_time('F j, Y'); ?></span>
					<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
				</h1>
			</div>


			<div class="single-long-form__introduction">
				<!-- article introduction -->
				<p><?php the_field('introduction_text'); ?></p>
				<!-- /article introduction -->
			</div>

			<div class="body-text" id="body-text">

			<?php the_content(); // Dynamic Content ?>

			<div class="body-text__end">End</div>

			<!-- End body text -->
			</div>
		</article>
	<!-- /article -->


			<!-- Info box at end of articles -->
			<div class="article-info-box author-box">
					<h4 class="article-info-box__title author-box__title">Author</h4>
					<div class="article-info-box__content author-box__content">
						<img class="article-info-box__author-headshot" src="<?php the_field('author_headshot'); ?>" alt="Headshot of the author">
						<div class="author-box__text-wrap">
							<p class="article-info-box__author-name"><?php the_field('author_name'); ?></p>
							<p class="article-info-box__author-description"><?php the_field('author_description'); ?></p>
							<?php 
								//Check if article has an author link - if so, render it into HTML
								$author_link = get_field('author_external_link');
								if($author_link):
									$author_link_url = $author_link['url'];
									$author_link_title = $author_link['title'];
									$author_link_target = $author_link['target'] ? $author_link['target'] : '_self'  ;
							?>
							<p><a class="article-info-box__author-link" href="<?php echo esc_url($author_link_url) ?>" rel="nofollow" target="<?php echo esc_attr($author_link_target); ?>"><?php echo esc_html($author_link_title); ?></a></p>
						<?php endif ?>
						</div>	
					</div>
				</div>
			<!-- end info box -->

			<!-- Info box at end of articles -->
			<div class="single-long-form__information">
				<div class="article-info-box">
					<h4 class="article-info-box__title">Further Reading</h4>
					<div class="article-info-box__content">
						<?php the_field('further_reading'); ?>
					</div>
				</div>

				<!-- Info box at end of articles -->
				<div class="article-info-box">
					<h4 class="article-info-box__title">Sources</h4>
					<div class="article-info-box__content">
						<?php the_field('sources'); ?>
					</div>
				</div>
			</div>
			<!-- end info box -->

			<!-- Info box at end of articles -->
			<div class="article-info-box">
					<h4 class="article-info-box__title">Categories</h4>
					<div class="article-info-box__content article-info-box__categories">
						<?php the_category(', '); ?>
					</div>
				</div>
			</div>
			<!-- end info box -->
		</div>

		


	<?php endwhile; ?>

	<?php else: ?>

		<!-- article -->
		<article>

			<h1><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h1>

		</article>
		<!-- /article -->

	<?php endif; ?>

	</section>
	<!-- /section -->
	</main>


<?php get_footer(); ?>
