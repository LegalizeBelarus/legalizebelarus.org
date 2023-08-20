<?php get_header(); ?>

<script>
    jQuery(document).ready(function () {
        jQuery('[data-toggle="tooltip"]').tooltip()
    });
</script>

<div class="container bg-light px-0 pt-4 cont">

    <div class="container pb-3 text-center">
        <h1 class="display-4 px-3"><?php the_title(); ?></p>
    </div>

    <div class="container pb-4 px-5">
        <p class="lead">
            <?php the_post();
            the_content(); ?>
        </p>
    </div>

</div>


<?php get_footer(); ?>



