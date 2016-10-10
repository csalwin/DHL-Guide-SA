<?php get_header(); ?>

	<div class="container content search">

		<section class="row headerslider">
			<img src="<?php echo get_template_directory_uri() ?>/img/banners/usefulinformation.jpg"/>
		</section>

		<section>


			<h1><?php echo sprintf( __( '%s Search Results for ', 'html5blank' ), $wp_query->found_posts ); echo get_search_query(); ?></h1>

			<?php get_template_part('loop'); ?>

			<?php get_template_part('pagination'); ?>

		</section>

	</div>

<?php get_footer(); ?>
