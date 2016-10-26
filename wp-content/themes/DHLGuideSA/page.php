<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 13/09/2016
 * Time: 17:27
 *
 */

get_header();?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="container content usefulInfo">
	<section class="row headerslider">
		<?php the_post_thumbnail();?>
	</section>

	<section class="row pageCopy">
		<h1><?php the_title()?></h1>
		<div class="pageContent">
			<?php the_content(); ?>
		</div>
	</section>
</div>

<?php
endwhile;
endif;
?>

<?php get_footer(); ?>
