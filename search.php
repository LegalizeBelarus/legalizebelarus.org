<?php get_header(); ?>

    <script async src="https://cse.google.com/cse.js?cx=b0ac6f33ab0269f0a"></script>

    <div class="container bg-light pb-5 pt-4 px-md-5 cont">


        <?php
        global $query_string;
        $query_args = explode("&", $query_string);
        $search_query = array();

        foreach ($query_args as $key => $string) {
            $query_split = explode("=", $string);
            $search_query[$query_split[0]] = urldecode($query_split[1]);
        } // foreach
        ?>


        <div class="row pb-3">
            <div class="col text-center">
                <p class="display-4 mb-4"><?php _e('You searched for:', 'legalizebelarus'); ?></p>
                <p class="lead"><?php echo $search_query['s']; ?></p>
            </div>
        </div>


        <?php
        $the_query = new WP_Query($search_query);
        if ($the_query->have_posts()) :
            ?>


            <div class="row mb-4">
                <div class="col text-center">
                    <p class="lead"><?php _e('💨 Some results found!', 'legalizebelarus'); ?></p>
                </div>
            </div>

            <?php while ($the_query->have_posts()) : $the_query->the_post(); ?>

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
                            <div class="py-2">
                                <h4 class="pb-1"><?php the_title(); ?></h4>
                                <p class="font-weight-normal"><?php if (!has_excerpt()) {
                                        echo '';
                                    } else {
                                        echo get_the_excerpt();
                                    } ?></p>
                            </div>

                            <?php if (getPostViews(get_the_ID()) != 0) : ?>
                                <div class="d-flex justify-content-end mt-auto pb-3 w-100">
                                    <div class="d-inline-flex px-1 badge-primary badge" style="opacity:0">
                                        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill" fill="white" xmlns="http://www.w3.org/2000/svg">
                                            <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>
                                            <path fill-rule="evenodd" d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>
                                        </svg>
                                        <span>&nbsp;<?php echo getPostViews(get_the_ID()); ?></span>
                                    </div>
                                </div>
                            <?php endif; ?>

                        </div>
                    </div>
                </div>
            </a>

        <?php endwhile; ?>

            <?php wp_reset_postdata(); ?>

            <p class="display-4 mt-5 mb-3 text-center"><?php _e('Try Google for advanced search', 'legalizebelarus'); ?></p>

            <div class="gcse-search"></div>


        <?php else : ?>
            <div class="row">
                <div class="col text-center">
                    <p class="lead"><?php _e('💨 No results found. Try Google.', 'legalizebelarus'); ?></p>
                    <div class="gcse-search"></div>
                </div>
            </div>

        <?php endif; ?>


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


<?php get_footer(); ?>
