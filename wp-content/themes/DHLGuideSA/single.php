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
		<section class="row additionalPosts">
			<div class="sectionTitle">
				<h1 class="text-center">You may also be interested in...</h1>
				<hr/>
			</div>
			<div class="relatedPosts">

				<?php
				global $post;
				//for use in the loop, list 5 post titles related to first tag on current post
				$tags = wp_get_post_tags($post->ID);
				if ($tags) {
					$first_tag = $tags[0]->term_id;

					$args = array(
						'post_type'=> 'guidelines',
						'tag__in' => array($first_tag),
						'post__not_in' => array($post->ID),
						'posts_per_page' => -1,
						'caller_get_posts' => 1
					);
				}else {
					$args = array(
						'posts_per_page' => -1,
						'post_type' => 'guidelines',
						'post__not_in' => array($post->ID),
					);
				}

				$my_query = new WP_Query($args);

				if( $my_query->have_posts() ) {

					$numPosts = 0;

						while ($my_query->have_posts()) : $my_query->the_post();
							if ($numPosts < 3) {
								if (get_field('category') == 'useful-information-page' || get_field('category') == 'useful-information' ) {
									$numPosts++;
									$image = get_field('thumbnail_image');
									?>
									<div class="col-xs-12 col-md-4 guideline">
										<div class="pageWrapper">
											<div class="imgWrapper">
												<a href="<?php echo $post->guid ?>">
													<?php if ($image){?>
														<img src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt']?>"/>
													<?php }else {
														the_post_thumbnail($post->ID, 'large');
													}?>
                                        </a>
											</div>
											<div class="textWrapper text-center">
												<p><?php echo $post->post_title; ?></p>
												<a href="<?php echo $post->guid ?>">Find out more</a>
											</div>
											<a href="<?php echo $post->guid ?>">
												<div class="hoverOverlay"></div>
											</a>
										</div>
									</div>


									<?php
								}
							}
						endwhile;

				}
				wp_reset_query();


?>


			</div>
		</section>
	</div>

<?php endwhile; ?>

<?php endif; ?>

<?php get_footer(); ?>