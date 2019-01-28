<?php 

	$args = array(
		'post_type' => 'long-form',
		'posts_per_page' => 10
	); 
	$long_form_loop = new WP_Query($args);	
?>

<?php if ( $long_form_loop->have_posts() ) : while ( $long_form_loop->have_posts() ) : $long_form_loop->the_post(); ?>

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
	<h1>No posts found</h1>
<?php endif; ?>
<?php wp_reset_postdata(); ?>