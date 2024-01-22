<?php /* Template Name: front-page-rus */ ?>

<?php get_header(); ?>

<div class="container bg-light px-0 pb-5 pt-4 cont">
    <main role="main">
        <section>

            <div class="container pb-4 px-3 text-center">
                <h1 class="display-4">Потребитель — не преступник!</h1>
            </div>

            <div class="video_wrapper">

                <iframe src="https://www.youtube.com/embed/gykK5WQWY9g" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

            </div>

            <div class='container'>
                <div class="container px-md-5 py-5">
                    <p class="lead">Мы появились в 2017 году как реакция на античеловечную и неэффективную наркополитику
                        в
                        Беларуси.</p>
                    <p class="lead"><a href="/naviny/statja-328-ugolovnogo-kodieksa-rjespubliki-bjelarus/">Статья
                            328</a> Уголовного кодекса нарушает базовые права человека,
                        ограничивает
                        гражданские свободы, маргинализирует уязвимые группы и поддерживает нетерпимость в обществе,
                        затрудняет доступ пациентов к лечению, способствует преступности, коррупции и появлению
                        неизученных «дизайнерских наркотиков».</p>

                    <p class="lead">Мы выступаем за ответственное отношение к регулированию психоактивных
                        веществ. Наркополитика должна быть основана на научных фактах и нацелена на снижение вреда от
                        употребления ПАВ.</p>

                    <p class="lead">Читайте подробный анализ беларуской наркополитики и рекомендации <a
                                href="https://legalizebelarus.org/wp-content/uploads/2023/09/belarus_drug_policy.pdf">здесь</a>.
                    </p>
                </div>
            </div>

            <div class="container pb-5 text-center">
                <p class="display-4">Наша стратегия</p>
            </div>

            <div class="row px-3 mx-0 px-md-5">

                <div class="col col-md-4 text-center mb-4">
                    <img class="si mb-3 mx-0" src="<?php bloginfo('template_url'); ?>/images/2.png">
                    <p class="lead">Образование по вопросам психоактивных веществ, зависимостей и практик снижения
                        вреда</p>
                </div>

                <div class="col-md-4 text-center mb-4">
                    <img class="si mb-3 mx-0" src="<?php bloginfo('template_url'); ?>/images/3.png">
                    <p class="lead">Адвокатирование декриминализации малых количеств контролируемых веществ</p>
                </div>

                <div class="col-md-4 text-center mb-5">
                    <img class="si mb-3 mx-0" src="<?php bloginfo('template_url'); ?>/images/1.png">
                    <p class="lead">Поддержка осуждённых по статье 328 в Беларуси и их близких</p>
                </div>

            </div>

            <div class="container pb-5 text-center">
                <p class="display-4">Истории осуждённых</p>
            </div>

            <div class="container pb-5">

                <div class="row px-3 align-items-center justify-content-center">

                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'story',
                        'posts_per_page' => 12
                    );
                    $post_query = new WP_Query($args);
                    if ($post_query->have_posts()) {
                        while ($post_query->have_posts()) {
                            $post_query->the_post();
                            ?>
                            <div class="col-lg-3 col-md-4 col-sm-6 p-3">
                                <a href="<?php echo the_permalink() ?>">
                                    <div class="post_wrapper_story">

                                        <div class="img_holder"
                                             style="background-image: linear-gradient(rgba(256,0,0,0.5),rgba(256,0,0,0.5)),
                                                     url(<?php the_post_thumbnail_url('medium_large'); ?>);"></div>

                                        <div class="align-items-center text-center align-items-center justify-content-center post_thumbnail p-3 d-flex">

                                            <h5 class="text-shadow text-light mb-0 pb-0"><?php the_title(); ?></h5>

                                        </div>


                                    </div>
                                </a>

                            </div>

                        <?php }
                    } ?>
                </div>

                <div class="container pt-3 mt-4 text-center">
                    <a href="https://legalizebelarus.org/story/">
                        <div class="btn btn-lg btn-danger">Все истории осуждённых (<?php
                    $args = array(
                        'category_name' => 'story',
                    );
                    $post_query = new WP_Query($args);
                    $total_news = $post_query->found_posts;
                            echo $total_news;
                            ?>)</div>
                    </a>
                </div>
            </div>


            <a href="/naviny/overdose/">
                <div class="jumbo_wrapper jumbotron d-flex jumbotron-fluid justify-content-center align-items-center px-3 my-0">
                    <div class="img_holder" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
                            url(<?php bloginfo('template_url'); ?>/images/crowd.jpg);"></div>
                    <div class="align-items-end post_thumbnail p-3 d-flex  flex-column">
                        <div class="d-flex w-100 h-100 justify-content-center align-items-center text-center">
                            <p class="display-4 text-light text-shadow">Что делать при передозировке?</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/presa/drug-combo/">
                <div class="jumbo_wrapper jumbotron d-flex jumbotron-fluid justify-content-center align-items-center px-3 my-0">
                    <div class="img_holder" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
                            url(<?php bloginfo('template_url'); ?>/images/drug-combinations.png);"></div>
                    <div class="align-items-end post_thumbnail p-3 d-flex  flex-column">
                        <div class="d-flex w-100 h-100 justify-content-center align-items-center text-center">
                            <p class="display-4 text-light text-shadow">Таблица совместимости психоактивных веществ</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/legal_consultation/">
                <div class="jumbo_wrapper jumbotron d-flex jumbotron-fluid justify-content-center align-items-center px-3 my-0">
                    <div class="img_holder" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
                            url(<?php bloginfo('template_url'); ?>/images/legal_support.jpg);"></div>
                    <div class="align-items-end post_thumbnail p-3 d-flex  flex-column">
                        <div class="d-flex w-100 h-100 justify-content-center align-items-center text-center">
                            <p class="display-4 text-light text-shadow">Юридическая поддержка для преследуемых по статье
                                328</p>
                        </div>
                    </div>
                </div>
            </a>

            <a href="/supplements/">
                <div class="jumbo_wrapper jumbotron d-flex jumbotron-fluid justify-content-center align-items-center px-3 my-0">
                    <div class="img_holder" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
                            url(<?php bloginfo('template_url'); ?>/images/supplements.jpg);"></div>
                    <div class="align-items-end post_thumbnail p-3 d-flex  flex-column">
                        <div class="d-flex w-100 h-100 justify-content-center align-items-center text-center">
                            <p class="display-4 text-light text-shadow">Сапплементы, добавки и витамины</p>
                        </div>
                    </div>
                </div>
            </a>

            <div class="container pb-4 pt-5 text-center">
                <p class="display-4">Новости ПАВ</p>
            </div>

            <?php
            $page = (get_query_var('page')) ? get_query_var('page') : 1;
            $query = new WP_Query(array(
                'posts_per_page' => 7,
                'category_name' => 'drugs',
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
                                <div class="py-2">
                                    <h4 class="pb-1"><?php the_title(); ?></h4>
                                    <p class="font-weight-normal"><?php if (!has_excerpt()) {
                                            echo '';
                                        } else {
                                            echo get_the_excerpt();
                                        } ?></p>
                                </div>

                                <div class="d-flex justify-content-end mt-auto pb-3 w-100">
                                    <div class="d-inline-flex px-1 badge-primary badge" style="opacity:0">
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

                <?php wp_reset_postdata(); ?>

            <?php else : ?>

            <?php endif; ?>

            <div class="container pt-3 text-center">
                <a target="_blank" href="https://legalizebelarus.org/drugs/">
                    <div class="btn btn-lg btn-dark">🔗 Все новости ПАВ (<?php
                    $args = array(
                        'category_name' => 'drugs',
                    );
                    $post_query = new WP_Query($args);
                    $total_news = $post_query->found_posts;
                    echo $total_news;
                    ?>)
                    </div>
                </a>
            </div>

            <div class="container pb-4 mt-5 text-center">
                <p class="display-4">Пресс-служба Legalize Belarus</p>
            </div>

            <div class="container pb-5">

                <div class="row ">

                    <?php
                    $args = array(
                        'post_type' => 'post',
                        'category_name' => 'medyja,presa',
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
                        <a href="https://legalizebelarus.org/naviny/">
                            <div class="post_wrapper"
                                 style="background: linear-gradient( rgba(0,0,0,0.1), rgba(0,0,0,0.1));">
                                <div class="img_holder d-flex flex-column justify-content-center align-items-center text-center text-dark h-100 px-3">
                                    <div class="display-4">🗞</div>
                                    <p class="display-4">Архив (<?php
                                    $args = array(
                                        'category_name' => 'presa',
                                    );
                                    $post_query = new WP_Query($args);
                                    $total_news = $post_query->found_posts;
                                    echo $total_news;
                                    ?>)
                                    </p>
                                </div>
                            </div>
                        </a>

                    </div>


                </div>
            </div>

            <div class="container bg-light pb-4 text-center">
                <p class="display-4">🔗 Ссылки</p>
            </div>

            <div class="container text-center pb-3">
                <a target="_blank" href="https://facebook.com/LegalizeBelarus"><img class="si2"
                                                                                    src="<?php bloginfo('template_url'); ?>/images/links/facebook.png"></a>
                <a target="_blank" href="https://vk.com/legalizebelarus"><img class="si2"
                                                                              src="<?php bloginfo('template_url'); ?>/images/links/vk.png"></a>
                <a target="_blank" href="https://instagram.com/legalizebelarus"><img class="si2"
                                                                                     src="<?php bloginfo('template_url'); ?>/images/links/instagram.png"></a>
                <a target="_blank" href="https://www.youtube.com/@legalizebelarus"><img class="si2"
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
            <!--                    Программное обеспечение для поддержки чата предоставлено <a href="https://www.livechat.com/"-->
            <!--                                                                                target="_blank">LiveChat</a>-->
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

                    jQuery('.flex-column').mouseover(function () {

                        jQuery(this).find('.badge-primary').css('opacity', '1');
                    });

                    jQuery('.flex-column').mouseout(function () {

                        jQuery(this).find('.badge-primary').css('opacity', '0');
                    });
                });
            </script>

        </section>
    </main>
</div>

<?php get_footer(); ?>


