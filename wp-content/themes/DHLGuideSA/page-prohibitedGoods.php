<?php
/**
 * Created by PhpStorm.
 * User: Chris
 * Date: 13/09/2016
 * Time: 17:27
 *
 * Template Name: Prohibited Goods
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
    <section class="information accordian">
        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
            <?php

                ?>
                <div class="panel">
                    <div class="panel-heading collapsed" role="tab" id="heading-accountHolder">

                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#accountHolder" aria-expanded="true" aria-controls="accountHolder" class="collapsed">
                            <div class="panel-heading-content-wrapper">
                                <h4 class="panel-title">
                                    Account Holder
                                </h4>
                            </div>
                        </a>
                    </div>
                    <div id="accountHolder" class="panel-collapse collapse" role="tabpanel" aria-labelledby="accountHolder">
                        <div class="panel-body">
                            <?php the_field('account_holder'); ?>
                        </div>
                    </div>
                </div>
                <?php

            ?>
            <?php

                ?>
                <div class="panel">
                    <div class="panel-heading" role="tab" id="heading-nonAccountHolder">

                        <a role="button" data-toggle="collapse" data-parent="#accordion" href="#nonAccountHolder" aria-expanded="true" aria-controls="nonAccountHolder" class="collapsed">
                            <div class="panel-heading-content-wrapper">
                                <h4 class="panel-title">
                                    Non Account Holder
                                </h4>
                            </div>
                        </a>
                    </div>
                    <div id="nonAccountHolder" class="panel-collapse collapse" role="tabpanel" aria-labelledby="nonAccountHolder">
                        <div class="panel-body">
                            <?php the_field('non_account_holders'); ?>
                        </div>
                    </div>
                </div>
                <?php

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





