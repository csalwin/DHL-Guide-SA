<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="container content singleCountries">
		<section class="row headerslider">
			<?php the_post_thumbnail();?>
		</section>
		<section class="row introduction">
			<div class="col-xs-12 col-sm-2 countryFlag">
				<?php
				$flag = get_field('country_flag'); ?>
				<img src="<?php echo $flag["url"]?>" alt="<?php echo $flag['alt']?>" title="<?php echo $flag['title'] ?>"/>
			</div>
			<div class="col-xs-12 col-sm-10 countryTitle">
				<h1><?php the_title();?></h1>
			</div>
			<div class="col-xs-12 col-sm-10">
				<p><?php echo get_field('about_country') ?></p>
			</div>
		</section>

		<section class="row countryInformation">
			<div class="yellowHeading">
				<h2><?php if (get_field('information_heading') != '') {
				    echo get_field('information_heading');
                    }else {
                        echo 'Country Information';
                    } ?></h2>
			</div>
			<div class="informationContent">
				<?php the_content(); ?>
			</div>
		</section>
	</div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>
