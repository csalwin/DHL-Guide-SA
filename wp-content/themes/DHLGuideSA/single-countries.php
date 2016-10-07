<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="container content singleCountries">
		<section class="row headerslider">
			<?php the_post_thumbnail();?>
		</section>
		<section class="row introduction">

			<div class="col-xs-12 col-sm-4">
				<?php
				$flag = get_field('country_flag'); ?>
				<img src="<?php echo $flag["url"]?>" alt="<?php echo $flag['alt']?>" title="<?php echo $flag['title'] ?>"/>
			</div>
			<div class="col-xs-12 col-sm-8">
				<h1 class="text-center"><?php the_title();?></h1>
			</div>
			<div class="col-xs-12">
				<p><?php echo get_field('about_country') ?></p>
			</div>


		</section>

		<section class="row countryInformation">
			<div class="yellowHeading">
				<h2>Heading</h2>
			</div>
			<div class="informationContent">
				<?php the_content(); ?>
			</div>
		</section>
	</div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
