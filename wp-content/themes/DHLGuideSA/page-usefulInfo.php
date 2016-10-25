<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 13/09/2016
 * Time: 17:27
 *
 * Template Name: Useful Info
 */

get_header();?>

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
    <section class="information">
        <div class="row">
            <?php

            global $post;

            $parent = new WP_Query(array(

                'post_parent'       => $post->ID,
                'order'             => 'ASC',
                'post_type'         => 'page',
                'posts_per_page'    => -1

            ));
            if($parent->have_posts() ) : while ( $parent->have_posts() ) : $parent->the_post();

                //            $my_wp_query = new WP_Query();
                //            $all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));
                //
                //            // Get the page as an Object
                //            $page =  get_the_ID();
                //
                //            // Filter through all pages and find Portfolio's children
                //            $pages = get_page_children( $page, $all_wp_pages );
                //
                //            // Get the page as an Object
                //            $usefulInfo =  get_page_by_title('Useful Information');
                //
                //            // Filter through all pages and find Portfolio's children
                //            $usefulInfo_children = get_page_children( $usefulInfo->post_parent, $all_wp_pages );
                //
                //            $choices = array ();
                //            foreach ($usefulInfo_children as $useful_child){
                //                echo $choices[$useful_child->post_name] = $useful_child->post_title;
                //            }
                //
                //
                //            echo '<pre>' . print_r( $post , true ) . '</pre>';
                //            echo '<pre>' . print_r( $usefulInfo , true ) . '</pre>';




                $imagePage = get_field('thumbnail_image');

                ?>
                <div class="col-xs-12 col-md-4 guideline">
                    <div class="pageWrapper">
                        <div class="imgWrapper">
                            <a href="<?php echo $post->guid ?>"><img src="<?php echo $imagePage['url'] ?>" alt="<?php echo $imagePage['alt']?>"/></a>
                        </div>
                        <div class="textWrapper text-center">
                            <p><?php echo $post->post_title; ?></p>
                            <a href="<?php echo $post->guid ?>">Find out more</a>
                        </div>
                        <a href="<?php echo $post->guid ?>"><div class="hoverOverlay"></div></a>
                    </div>
                </div>
                <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                <?php
            endwhile;
            endif;

            wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly


            $args = array(
                'post_type'=> 'guidelines',
                'order'    => 'ASC',
                'posts_per_page'    => -1
            );

            $the_query = new WP_Query( $args );
            if($the_query->have_posts() ) : while ( $the_query->have_posts() ) : $the_query->the_post();


                if (get_field('category') == 'useful-information-page' || get_field('category') == 'useful-information' ) {
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

                };
            endwhile;
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





