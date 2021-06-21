<?php /* Template Name: page-press */ ?>
<?php get_header(); ?>


    <div class="container bg-light pb-5 pt-4 px-md-5 cont">

        <div class="row pb-5">
            <div class="col text-center">
                <p class="display-4 mb-4">Legalize Belarus Press Service</p>

                <a href="/news">
                    <div class="badge-primary badge shadow my-1">All news</div>
                </a>
                <a href="/media">
                    <div class="badge-primary badge shadow my-1">Media mentions</div>
                </a>

            </div>
        </div>

        <?php
        $page = (get_query_var('page')) ? get_query_var('page') : 1;
        $query = new WP_Query(array(
                'posts_per_page' => 10,
                'category_name' => 'press',
                'paged' => $page
        ));
        if ($query->have_posts()) : while ($query->have_posts()) : $query->the_post();
            ?>

            <a href="<?php echo the_permalink() ?>" class="no-dec text-dark">
                <div class="row mb-4 post-container mx-3">

                    <div class="col-lg-3 px-0">
                        <div class="h-100 rad-l news_wrapper">

                            <div class="img_holder"
                                 style="background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.7)),
                                         url(<?php the_post_thumbnail_url('medium_large'); ?>);"></div>

                            <div class="align-items-end post_thumbnail p-3 d-flex flex-column">
                                <div>
                                    <span class="badge badge-secondary"><?php echo get_the_date('j F Y'); ?></span>
                                </div>
                            </div>

                        </div>
                    </div>

                    <div class="col-lg-9 px-0">
                        <div class="container d-flex flex-column h-100 w-100">
                            <div>
                                <h4><?php the_title(); ?></h4>
                                <p class="font-weight-normal"><?php if (!has_excerpt()) {
                                        echo '';
                                    } else {
                                        echo get_the_excerpt();
                                    } ?></p>
                            </div>

                            <div class="d-flex justify-content-end mt-auto pb-3 w-100">
                                <div class="d-inline-flex px-1 badge-primary badge" style="opacity: 0">
                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill"
                                         fill="white"
                                         xmlns="http://www.w3.org/2000/svg">
                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                        <path fill-rule="evenodd"
                                              d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                    </svg>
                                    <span>&nbsp<?php echo getPostViews(get_the_ID()); ?></span>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </a>


        <?php endwhile; ?>

        <?php endif; ?>

        <div class="container text-center pt-3">


            <?php


            echo paginate_links(array(
                    'base' => '/press/%_%',
                    'total' => $query->max_num_pages,
                    'current' => max(1, get_query_var('page')),
                    'format' => '%#%',
                    'show_all' => false,
                    'type' => 'plain',
                    'end_size' => 2,
                    'mid_size' => 3,
                    'prev_next' => true,
                    'prev_text' => '←',
                    'next_text' => '→',
                    'add_args' => false,
                    'add_fragment' => '',
            ));

            wp_reset_query();
            ?>


        </div>


    </div>

    <script>
        jQuery(document).ready(function () {

            jQuery('.flex-column').mouseover(function () {

                jQuery(this).find('.badge-primary').css('opacity', '1');
            });

            jQuery('.flex-column').mouseout(function () {

                jQuery(this).find('.badge-primary').css('opacity', '0');
            });
        });
    </script>

    </div>


<?php get_footer(); ?>