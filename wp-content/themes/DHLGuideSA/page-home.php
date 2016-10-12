<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 13/09/2016
 * Time: 17:27
 *
 * Template Name: Home Page
 */

get_header();?>

<div class="container content pageHome">
    <section class="row headerSlider">
        <div class="bxslider">
            <?php
            if (have_rows('slider_images')) {

                while (have_rows('slider_images')){
                    the_row();
                    $slide_image = get_sub_field('slider_image');
                    $slide_title = get_sub_field('slider_title');
                    $slide_CTA = get_sub_field('slider_action_text');
                    $slide_link = get_sub_field('slider_link');
                    ?>
                    <div class="slide-pane">
                        <a href="<?php echo $slide_link ?>">
                            <img src="<?php echo $slide_image["url"]?>" alt="<?php echo $slide_image['alt']?>" title="<?php echo $slide_image['title'] ?>"/>
                            <div class="headerBanner">
                                <h3><?php echo $slide_title; ?></h3>
                                <span><?php echo $slide_CTA; ?> </span>
                            </div>
                        </a>

                    </div>

                   <?php
                }


            }else {

            }

            ?>

        </div>
    </section>
    <section class="row countriesBar">
        <div class="text-center">
            <h2 class="fsf heading">Sending or receiving a shipment?</h2>
            <p class="headingTagLine">Regulations vary per country. Check out our <a href="#">Country Guidelines</a> first.</p>
        </div>
        <div class="row">
            <?php
            // check if the repeater field has rows of data
            if( have_rows('countries_row') ):
                // loop through the rows of data
                while ( have_rows('countries_row') ) : the_row();

                    $post_object = get_sub_field('country_post');

                    if( $post_object ):

                        // override $post
                        $post = $post_object;
                        setup_postdata( $post );
                        $image = get_field('country_thumbnail');

                        ?>
                        <div class="countryWrapper col-xs-6 col-md-3">
                            <a href="<?php the_permalink(); ?>">
                                <img src="<?php echo $image['sizes']['large']?>" alt="<?php echo $image['alt']?>" title="<?php echo $image['title'] ?>"/>
                                <div class="hoverOverlay"></div>
                            </a>
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
    <hr/>
    <section class="row guidelines">
        <div class="text-center">
            <h1 class="fsf heading">South Africa Import and Export Guidelines</h1>
            <p class="headingTagLine">Import and Export regulations change all the time. Make sure your're a step ahead with our <a href="#">Shipping Guidelines</a></p>
        </div>

        <div class="row">

            <?php
            // check if the repeater field has rows of data
            if( have_rows('import_export_guidelines') ):
                // loop through the rows of data
                while ( have_rows('import_export_guidelines') ) : the_row();

                    $post_object = get_sub_field('guideline');
                    $post_image = get_sub_field('guideline_image');
                    $post_link_text = get_sub_field('guideline_button_text');

                    if( $post_object ):

                        // override $post
                        $post = $post_object;
                        setup_postdata( $post );
                        ?>
                        <div class="col-xs-12 col-md-4 guideline">

                            <div class="pageWrapper">
                                <div class="imgWrapper">
                                    <img src="<?php echo $post_image['sizes']['large']?>" alt="<?php echo $post_image['alt']?>" title="<?php echo $post_image['title'] ?>"/>
                                </div>
                                <div class="textWrapper text-center">
                                    <p><?php the_title(); ?></p>
                                    <a href="<?php echo get_home_url().'/useful-information/#'.$post->post_name; ?>"><?php echo $post_link_text; ?></a>
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




<?php get_footer();





