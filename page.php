<?php get_header(); ?>

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js"
        integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>
<script>
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
</script>

<div class="container bg-light px-0 pt-4 cont">

    <div class="container pb-3 text-center">
        <p class="display-4"><?php the_title(); ?></p>
    </div>

    <div class="container pb-4 px-5">
        <p class="lead">
            <?php the_post();
            the_content(); ?>
        </p>
    </div>

</div>


<?php get_footer(); ?>



