
<div class="row">
<?php if (have_posts()): while (have_posts()) : the_post(); ?>

	<!-- article -->
	<article id="post-<?php the_ID(); ?>" <?php post_class('col-xs-12'); ?>>

<!--		<!-- post thumbnail -->
<!--		--><?php //if ( has_post_thumbnail()) : // Check if thumbnail exists ?>
<!--			<a href="--><?php //the_permalink(); ?><!--" title="--><?php //the_title(); ?><!--">-->
<!--				--><?php //the_post_thumbnail(array(120,120)); // Declare pixel size you need inside the array ?>
<!--			</a>-->
<!--		--><?php //endif; ?>
		<!-- /post thumbnail -->

		<!-- post title -->
		<h2>
			<?php

				if ($post->post_type == 'guidelines' || $post->post_type == 'countries') {
					$link = $post->guid;
				} else {
					$link = get_home_url().'/useful-information/' . $post->post_type . '/#' . $post->post_name;
				}

			?>
			<a href="<?php echo $link ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a>
		</h2>
		<!-- /post title -->

		<!-- post details -->
<!--		<span class="date">--><?php //the_time('F j, Y'); ?><!--</span>-->
		<!-- /post details -->

		<?php html5wp_excerpt(html5wp_custom_post(50), moreCallback()); // Build your custom callback length in functions.php ?>

	</article>
	<!-- /article -->

<?php endwhile; ?>

<?php else: ?>

	<!-- article -->
	<article>
		<h2><?php _e( 'Sorry, nothing to display.', 'html5blank' ); ?></h2>
	</article>
	<!-- /article -->



<?php endif; ?>

</div>
