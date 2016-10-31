<?php get_header(); ?>

	<div class="container content noFound">
		<section class="row headerslider">
			<img src="<?php echo get_template_directory_uri() ?>/img/banners/usefulinformation.jpg">
		</section>
		<!-- section -->
		<section class="row">

			<!-- article -->
			<article id="post-404" class="text-center">

				<h1><?php _e( 'Page not found', 'html5blank' ); ?></h1>
				<h2>
					<a href="<?php echo home_url(); ?>"><?php _e( 'Return home?', 'html5blank' ); ?></a>
				</h2>

			</article>
			<!-- /article -->

		</section>
		<!-- /section -->
	</div>

<?php get_footer(); ?>
