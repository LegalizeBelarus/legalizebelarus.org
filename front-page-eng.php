<?php /* Template Name: front-page-eng */ ?>

<?php get_header(); ?>

<div class="container bg-light px-0 pb-5 pt-4 cont">
    <main role="main">
        <section>

            <div class="container pb-4 px-3 text-center">
                <h1 class="display-4">User is not a criminal!</h1>
            </div>

            <div class="video_wrapper">
                <iframe src="https://www.youtube.com/embed/_RauNAjof-g" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>
            </div>

            <div class='container'>
                <div class="container px-3 px-md-5 py-5">
                    <p class="lead">We emerged in 2017 as a reaction to the inhumane and ineffective drug policy in
                        Belarus.</p>
                    <p class="lead"><a href="/en/news/article-328-of-the-criminal-code-of-republic-of-belarus/">Article
                            328</a>
                        violates basic human rights, restricts civil liberties, marginalizes vulnerable groups and
                        promotes intolerance in society, hinders patients' access to treatment, contributes to crime,
                        corruption and popularity of New Psychoactive Substances.</p>

                    <p class="lead">We stand for a responsible approach to the regulation of psychoactive
                        substances. Drug policy should be based on scientific evidence and aimed at reducing the harm of
                        drug use.</p>
                </div>
            </div>

            <div class="container pb-5 text-center">
                <p class="display-4">Our strategy</p>
            </div>

            <div class="row px-3 mx-0 px-md-5">
                <div class="col-md-4 text-center mb-4">
                    <img class="si mb-3" src="<?php bloginfo('template_url'); ?>/images/2.png">
                    <p class="lead">Deliver education about psychoactive substances and addictions</p>
                </div>
                <div class="col-md-4 text-center mb-4">
                    <img class="si mb-3" src="<?php bloginfo('template_url'); ?>/images/3.png">
                    <p class="lead">Advocate for decriminalization of small amount possession</p>
                </div>
                <div class="col-md-4 text-center mb-5">
                    <img class="si mb-3" src="<?php bloginfo('template_url'); ?>/images/1.png">
                    <p class="lead">Support drug users and people convicted under Article 328</p>
                </div>
            </div>

            <a href="https://legalizebelarus.org/presa/overdose/">
                <div class="jumbo_wrapper jumbotron d-flex jumbotron-fluid justify-content-center align-items-center px-3 my-0">
                    <div class="img_holder" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
                            url(<?php bloginfo('template_url'); ?>/images/crowd.jpg);"></div>
                    <div class="align-items-end post_thumbnail p-3 d-flex  flex-column">
                        <div class="d-flex w-100 h-100 justify-content-center align-items-center text-center">
                            <p class="display-4 text-light text-shadow">What do you do if someone is overdosing?</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="https://legalizebelarus-org.translate.goog/presa/drug-combo/?_x_tr_sl=ru&_x_tr_tl=en&_x_tr_hl=be&_x_tr_pto=wapp">
                <div class="jumbo_wrapper jumbotron d-flex jumbotron-fluid justify-content-center align-items-center px-3 my-0">
                    <div class="img_holder" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
                            url(<?php bloginfo('template_url'); ?>/images/drug-combinations.png);"></div>
                    <div class="align-items-end post_thumbnail p-3 d-flex  flex-column">
                        <div class="d-flex w-100 h-100 justify-content-center align-items-center text-center">
                            <p class="display-4 text-light text-shadow">Drugs combinations chart</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/en/press/legal-support-eng/">
                <div class="jumbo_wrapper jumbotron d-flex jumbotron-fluid justify-content-center align-items-center px-3 my-0">
                    <div class="img_holder" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
                            url(<?php bloginfo('template_url'); ?>/images/legal_support.jpg);"></div>
                    <div class="align-items-end post_thumbnail p-3 d-flex  flex-column">
                        <div class="d-flex w-100 h-100 justify-content-center align-items-center text-center">
                            <p class="display-4 text-light text-shadow">Legal consultations for the prosecuted under
                                Article 328 and their relatives</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/wiki/">
                <div class="jumbo_wrapper jumbotron d-flex jumbotron-fluid justify-content-center align-items-center px-3 my-0">
                    <div class="img_holder" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
                            url(<?php bloginfo('template_url'); ?>/images/supplements.jpg);"></div>
                    <div class="align-items-end post_thumbnail p-3 d-flex  flex-column">
                        <div class="d-flex w-100 h-100 justify-content-center align-items-center text-center">
                            <p class="display-4 text-light text-shadow">Drugs and supplements</p>
                        </div>
                    </div>
                </div>
            </a>

            <div class="container pb-4 pt-5 text-center">
                <p class="display-4">News</p>
            </div>

            <div class="container pb-5">

                <div class="row">

                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'media,press',
                        'posts_per_page' => 11
                    );
                    $post_query = new WP_Query($args);
                    if ($post_query->have_posts()) {
                        while ($post_query->have_posts()) {
                            $post_query->the_post();
                            ?>


                            <div class="col-lg-3 col-md-4 col-sm-6 p-0">
                                <a href="<?php echo the_permalink() ?>">
                                    <div class="post_wrapper">

                                        <div class="img_holder"
                                             style="background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.9)),
                                                     url(<?php the_post_thumbnail_url('medium_large'); ?>);"></div>

                                        <div class="align-items-end post_thumbnail p-3 d-flex  flex-column">

                                            <div class="mb-auto">
                                        <span class="badge badge-secondary">
                                        <?php echo get_the_date('j F Y'); ?>
                                        </span>
                                            </div>

                                            <div class="d-flex w-100">
                                                <p class="lead text-shadow text-light mb-0 pb-0"><?php the_title(); ?></p>
                                            </div>

                                        </div>


                                    </div>
                                </a>

                            </div>

                        <?php }
                    } ?>


                    <div class="col-lg-3 col-md-4 col-sm-6 p-0">
                        <a href="https://legalizebelarus.org/en/news/">
                            <div class="post_wrapper"
                                 style="background: linear-gradient( rgba(0,0,0,0.1), rgba(0,0,0,0.1));">
                                <div class="img_holder d-flex flex-column justify-content-center align-items-center text-center text-dark h-100 px-3">
                                    <div class="display-4">🇬🇧</div>
                                    <p class="display-4">All news in English</p>
                                    <p class="lead">(See main language version for more)</p>
                                </div>
                            </div>
                        </a>

                    </div>


                </div>
            </div>

            <div class="container bg-light pb-4 text-center">
                <p class="display-4">🔗 Links</p>
            </div>

            <div class="container text-center pb-3">
                <a target="_blank" href="https://facebook.com/LegalizeBelarus"><img class="si2"
                                                                                    src="<?php bloginfo('template_url'); ?>/images/links/facebook.png"></a>
                <a target="_blank" href="https://vk.com/legalizebelarus"><img class="si2"
                                                                              src="<?php bloginfo('template_url'); ?>/images/links/vk.png"></a>
                <a target="_blank" href="https://instagram.com/legalizebelarus"><img class="si2"
                                                                                     src="<?php bloginfo('template_url'); ?>/images/links/instagram.png"></a>
                <a target="_blank" href="https://www.youtube.com/channel/UCFwygSKPi82hIlOVCF-2elg"><img class="si2"
                                                                                                        src="<?php bloginfo('template_url'); ?>/images/links/youtube.png"></a>
                <a target="_blank" href="https://t.me/LegalizeBelarus"><img class="si2"
                                                                            src="<?php bloginfo('template_url'); ?>/images/links/telegram.png"></a>

                <a target="_blank" href="https://ok.ru/legalizebelarus"><img class="si2"
                                                                             src="<?php bloginfo('template_url'); ?>/images/links/ok.png"></a>


                <a target="_blank" href="https://www.patreon.com/LegalizeBelarus"><img class="si2"
                                                                                       src="<?php bloginfo('template_url'); ?>/images/links/patreon.png"></a>
                <a target="_blank" href="https://github.com/LegalizeBelarus"><img class="si2"
                                                                                  src="<?php bloginfo('template_url'); ?>/images/links/github.png"></a>
                <a target="_blank" href="https://rarible.com/legalizebelarus"><img class="si2"
                                                                                   src="<?php bloginfo('template_url'); ?>/images/links/rarible.png"></a>
                <a target="_blank" href="https://ru.wikipedia.org/wiki/Legalize_Belarus"><img class="si2"
                                                                                   src="<?php bloginfo('template_url'); ?>/images/links/wiki.png"></a>
            </div>

<!--            <div class="container text-center pt-3">-->
<!--                <p class="lead">-->
<!--                    Chat support software generously provided by <a href="https://www.livechat.com/" target="_blank">LiveChat</a>-->
<!--                </p>-->
<!--            </div>-->

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
        </section>
    </main>
</div>

<?php get_footer(); ?>


