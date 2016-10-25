<?php get_header(); ?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="container content singleGuidelines">
		<section class="row headerslider">
			<?php the_post_thumbnail();?>
		</section>
		<section class="row postContent">
			<div class="postTitle">
				<h1><?php the_title();?></h1>
			</div>
			<div class="informationContent">
				<?php the_content(); ?>
			</div>
		</section>
	</div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>