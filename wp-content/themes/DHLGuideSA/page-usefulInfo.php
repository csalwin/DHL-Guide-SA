<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 13/09/2016
 * Time: 17:27
 *
 * Template Name: Useful Information
 */

get_header();?>

<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="container content usefulInfo">
    <section class="row headerSlider">
        <section class="row headerslider">
            <?php the_post_thumbnail();?>
        </section>
    </section>

    <section class="row introduction">
        <h1><?php the_title()?></h1>
        <div class="theContent">
            <?php the_content(); ?>
        </div>
    </section>
    <section class="information accordian">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php
            // check if the repeater field has rows of data
            if( have_rows('list_of_posts') ):
                // loop through the rows of data
                while ( have_rows('list_of_posts') ) : the_row();

                    $post_object = get_sub_field('post');

                    if( $post_object ):
                        // override $post
                        $post = $post_object;
                        setup_postdata( $post );
                        ?>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading<?php echo $post->post_name?>">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse<?php echo $post->post_name?>" aria-expanded="true" aria-controls="collapse<?php echo $post->post_name?>">
                                            <?php the_title(); ?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse<?php echo $post->post_name?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="heading<?php echo $post->post_name?>">
                                    <div class="panel-body">
                                        <?php the_content(); ?>
                                    </div>
                                </div>
                            </div>


                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                    <?php endif;

                endwhile;

            else :

                // no rows found

            endif;
            ?>

        </div>


    </section>

</div>


    <script>
        jQuery(document).ready(function ($) {
            location.hash && $(location.hash + '.collapse').collapse('show');
        });
    </script>


<?php endwhile; ?>

<?php endif; ?>

<?php get_footer();





