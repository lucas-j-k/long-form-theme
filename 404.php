<?php get_header(); ?>

	<main role="main" class="offset-mobile-menu">
		<!-- section -->
		<section>
			<h1 class="global-page-title"><?php _e( 'Page not found', 'longform' ); ?></h1>
			<!-- article -->
			<article id="post-404">
				<div class="body-text">	
					
						<a class="cta cta--center" href="<?php echo home_url(); ?>"><?php _e( 'Back to Homepage', 'longform' ); ?></a>
					
				</div>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</main>


<?php get_footer(); ?>
