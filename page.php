<?php get_header(); ?>

<div class="container bg-light px-0 pt-4 cont">

    <div class="container pb-3 text-center">
        <p class="display-4"><?php the_title(); ?></p>
    </div>	
	
    <div class="container pb-4 px-5">
        <p class="lead">
            <?php the_post(); the_content(); ?>
        </p>
    </div>
	
</div>


<?php get_footer(); ?>