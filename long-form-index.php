<?php /* Template Name: Long Form Index Template */ get_header(); ?>

	<main role="main" class="loop-page offset-mobile-menu">
		<!-- section -->
		<section>

			<h1 class="global-page-title"><?php _e( 'Stories', 'html5blank' ); ?></h1>

			<div class="standard-loop">
				<?php get_template_part('long-form-loop'); ?>
			</div>


			

			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
