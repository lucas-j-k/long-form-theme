<?php get_header(); ?>

	<main role="main" class="offset-mobile-menu">
		<!-- section -->
		<section>

			<h1 class="global-page-title"><?php single_cat_title(); ?></h1>
			
			<div class="standard-loop">
				<?php get_template_part('loop'); ?>
			</div>
			
			<?php get_template_part('pagination'); ?>

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
