<?php get_header(); ?>


<div class="container bg-light px-0 pt-4 cont">

    <div class="container pb-5 text-center">
        <p class="display-4">
            <?php _e('Page not found 😢', 'legalizebelarus'); ?>
        </p>
    </div>


    <a href="<?php echo get_home_url(); ?>">
        <div class="jumbo_wrapper jumbotron d-flex jumbotron-fluid justify-content-center align-items-center px-3 my-0">
            <div class="img_holder" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
                                    url(<?php bloginfo('template_url'); ?>/images/404.jpg);"></div>

            <div class="align-items-end post_thumbnail p-3 d-flex  flex-column">


                <div class="d-flex w-100 h-100 justify-content-center align-items-center text-center">
                    <p class="display-4 text-light text-shadow"><?php _e('Go to main page', 'legalizebelarus'); ?></p>
                </div>

            </div>

        </div>
    </a>

    <div class="container mt-5 pb-4 text-center">
        <p class="lead">
            <?php _e('"Think for yourself. Question authority."', 'legalizebelarus'); ?>
        </p>
        <p class="lead font-italic">
           <?php _e('Timothy Leary', 'legalizebelarus'); ?>
        </p>
    </div>

</div>


<script>
    jQuery(document).ready(function () {

        jQuery('.post_wrapper, .jumbo_wrapper').mouseover(function () {

            jQuery(this).find('.img_holder').css('transform', 'scale(1.05)');
        });

        jQuery('.post_wrapper, .jumbo_wrapper').mouseout(function () {

            jQuery(this).find('.img_holder').css('transform', 'scale(1)');
        });
    });
</script>


<?php get_footer(); ?>