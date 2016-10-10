<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<div class="row">

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12 col-sm-4 col-md-3'); ?>>

<!--		<!-- post thumbnail -->
<!--		--><?php //if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
<!--			<a href="--><?php //the_permalink(); ?><!--" title="--><?php //the_title(); ?><!--">-->
<!--				--><?php //the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
<!--			</a>-->
<!--		--><?php //endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2>
			<a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
		<span class="date"><?php the_time('F j, Y'); ?></span>
		<!-- /post details -->

		<?php html5wp_excerpt('html5wp_index'); // Build your custom callback length in functions.php ?>

	</article>
	<!-- /article -->
	</div>

<?php endwhile; ?>

<?php else: ?>
	<div class="row">
	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->

	</div>

<?php endif; ?>
