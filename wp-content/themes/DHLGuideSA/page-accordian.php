<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 13/09/2016
 * Time: 17:27
 *
 * Template Name: Accordian
 */

get_header();

?>


<?php if (have_posts()): while (have_posts()) : the_post(); ?>

<div class="container content usefulInfo">
    <section class="row headerslider">
        <?php the_post_thumbnail();?>
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

            $pageSlug = $post;

            $args = array(
                'post_type'=> 'guidelines',
                'order'    => 'ASC',
                'posts_per_page'    => -1
            );

            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();

                if (get_field('category') == $pageSlug->post_name) {

                    if (get_field('category') == 'useful-information-page') {?>

                        <div class="col-xs-12 col-md-4 guideline">
                            <div class="pageWrapper">
                                <div class="imgWrapper">
                                    <a href="<?php echo $post->guid ?>"><?php the_post_thumbnail($post->ID, 'large') ?></a>
                                </div>
                                <div class="textWrapper text-center">
                                    <p><?php echo $post->post_title; ?></p>
                                    <a href="<?php echo $post->guid ?>">Find out more</a>
                                </div>
                                <a href="<?php echo $post->guid ?>"><div class="hoverOverlay"></div></a>
                            </div>
                        </div>
                        <?php
                    }else {

//            // check if the repeater field has rows of data
//            if( have_rows('list_of_posts') ):
//                // loop through the rows of data
//                while ( have_rows('list_of_posts') ) : the_row();
//
//                    $post_object = get_sub_field('post');
//
//                    if( $post_object ):
//                        // override $post
//                        $post = $post_object;
//                        setup_postdata( $post );
                        ?>
                        <div class="panel">
                            <div class="panel-heading" role="tab" id="heading<?php echo $post->post_name ?>">

                                <a role="button" data-toggle="collapse" data-parent="#accordion"
                                   href="#<?php echo $post->post_name ?>" aria-expanded="true"
                                   aria-controls="<?php echo $post->post_name ?>" class="collapsed">
                                    <div class="panel-heading-content-wrapper">
                                        <h4 class="panel-title">
                                            <?php echo $post->post_title ?>
                                        </h4>
                                    </div>
                                </a>
                            </div>
                            <div id="<?php echo $post->post_name ?>" class="panel-collapse collapse" role="tabpanel"
                                 aria-labelledby="<?php echo $post->post_name ?>">
                                <div class="panel-body">
                                    <?php the_content(); ?>
                                </div>
                            </div>
                        </div>

                        <?php
                    }
                };

            endwhile;

            else :

                // no rows found

            endif;
            ?>


                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>


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





