<?php /* Template Name: page-fundraising */ ?>

<?php get_header(); ?>

<div class="container bg-light px-0 pb-4 pt-4 cont">
    <div class="jumbotron d-flex flex-column jumbotron-fluid justify-content-center align-items-center"
         style="background-image: linear-gradient(135deg, rgba(229, 27, 77, 0.5), rgba(62, 2, 166, 0.5)),
                 url(<?php echo wp_get_attachment_url(get_post_thumbnail_id(get_queried_object_id())); ?>);">

        <p class="display-4 mx-3 text-center text-light text-shadow"><?php the_title(); ?></p>

        <p class="lead mx-3 my-5 text-light text-shadow text-center">
            <?php if (!has_excerpt()) {
                echo '';
            } else {
                echo get_the_excerpt();
            } ?>
        </p>

        <div class="container text-center">
            <div class="d-flex justify-content-center align-content-center">
                <div class="btn fundraising-button py-2 asp-attach-product-16075"><?php _e('Donate now', 'legalizebelarus'); ?></div>
            </div>
        </div>
    </div>
</div>

<div class="container cont bg-light pb-5 px-5">
    <main role="main">
        <section>
            <div class="container">
                <?php the_content() ?>
            </div>
            <div class="container text-center mt-5">
                <div class="d-flex justify-content-center align-content-center">
                    <div class="btn fundraising-button-dark py-2 asp-attach-product-16075 text-light shadow"><?php _e('Donate now', 'legalizebelarus'); ?></div>
                </div>
            </div>
            <p class="mt-5 text-center lead mb-0">Powered by</p>
            <div class="d-flex align-content-center justify-content-center">
                <img class="stripe-image" src="<?php bloginfo('template_url'); ?>/images/stripe.png" alt="Stripe logo">
            </div>
        </section>
    </main>
</div>


<?php get_footer(); ?>
