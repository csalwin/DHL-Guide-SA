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
            $my_wp_query = new WP_Query();
            $all_wp_pages = $my_wp_query->query(array('post_type' => 'page'));

            // Get the page as an Object
            $page =  get_the_ID();

            // Filter through all pages and find Portfolio's children
            $pages = get_page_children( $page, $all_wp_pages );

            //echo '<pre>' . print_r( $pages, true ) . '</pre>';

            foreach ($pages as $page){
                ?>
                                        <div class="col-xs-12 col-md-4 guideline">
                                            <div class="pageWrapper">
                                                <div class="imgWrapper">
                                                    <a href="<?php echo $page->guid ?>"><?php the_post_thumbnail($page->ID, 'large') ?></a>
                                                </div>
                                                <div class="textWrapper text-center">
                                                    <p><?php echo $page->post_title; ?></p>
                                                    <a href="<?php echo $page->guid ?>">Find out more</a>
                                                </div>
                                                <div class="hoverOverlay"></div>
                                            </div>
                                        </div>
                                        <?php wp_reset_postdata(); // IMPORTANT - reset the $post object so the rest of the page works correctly ?>
                                    <?php
            ?>

            <?php
            }
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





