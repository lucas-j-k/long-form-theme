<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('standard-loop__article'); ?>>
		<p class="standard-loop__article-date"><?php the_date('F j, Y'); ?></p>
		<!-- Featured image -->
		<?php if ( has_post_thumbnail()) : ?>
		<div class="standard-loop__thumbnail-wrap">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>">
				<?php the_post_thumbnail('medium'); ?>
			</a>
		</div>		
		<?php endif; ?>
		<!-- featured image -->

		<!-- article title -->
		<h2 class="standard-loop__title">
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /article title -->

		<!-- article introduction -->
		<div class="standard-loop__introduction"><p><?php the_field('introduction_text'); ?></p></div>
		<!-- /article introduction -->

	</article>
	<!-- article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'No stories found', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

<?php endif; ?>
