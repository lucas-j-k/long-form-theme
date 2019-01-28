<?php 

	//Get the global categories and list them
	$categories = get_categories( array(
		'orderby' => 'name',
		'parent'  => 0
	) );

?>

<?php get_header(); ?>

<main role="main" class="loop-page offset-mobile-menu">

	<section class="category-menu">
		<ul class="category-menu__list">
			<?php foreach ( $categories as $category ) :  ?>
			<?php if ( $category->term_id == 1 ) { continue; }  ?>
				<li><a href="<?php echo esc_url( get_category_link( $category->term_id ) ) ?>"><?php echo esc_html( $category->name ) ?></a></li>
			<?php endforeach ?>
			
		</ul>	
	</section>

	<!-- section -->
	<section>
		<h1 class="global-page-title"><?php _e( 'Latest Stories', 'html5blank' ); ?></h1>

		<div class="standard-loop">
			<?php get_template_part('loop'); ?>
		</div>


	</section>
	<!-- /section -->
</main>


<?php get_footer(); ?>
