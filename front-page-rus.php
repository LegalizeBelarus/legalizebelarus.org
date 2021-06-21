<?php /* Template Name: front-page-rus */ ?>

<?php get_header(); ?>

<div class="container bg-light px-0 pb-5 pt-4 cont">
    <main role="main">
        <section>

            <div class="container pb-4 px-3 text-center">
                <p class="display-4">Legalize Belarus — это про людей.</p>
            </div>

            <div class="video_wrapper">

                <iframe src="https://www.youtube.com/embed/VTPo5YQvZ3s" frameborder="0"
                        allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture"
                        allowfullscreen></iframe>

            </div>

            <div class='container'>
                <div class="container px-md-5 py-5">
                    <p class="lead">Мы появились в 2017 году как реакция на античеловечную и неэффективную наркополитику
                        в
                        Беларуси.</p>
                    <p class="lead"><a href="/naviny/statja-328-ugolovnogo-kodieksa-rjespubliki-bjelarus/">Статья 328</a> Уголовного кодекса нарушает базовые права человека,
                        ограничивает
                        гражданские свободы, маргинализирует уязвимые группы и поддерживает нетерпипость в обществе,
                        затрудняет доступ пациентов к лечению, способствует преступности, коррупции и появлению
                        неизученных «дизайнерских наркотиков».</p>

                    <p class="lead">Мы выступаем за ответственное отношение к регулированию психоактивных
                        веществ. Наркополитика должна быть основана на научных фактах и нацелена на снижение вреда от
                        употребления наркотиков.</p>
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

            <a href="/naviny/anketa-328/">
                <div class="jumbo_wrapper jumbotron d-flex jumbotron-fluid justify-content-center align-items-center px-3 my-0">
                    <div class="img_holder" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
                                    url(<?php bloginfo('template_url'); ?>/images/prison.jpg);"></div>

                    <div class="align-items-end post_thumbnail p-3 d-flex  flex-column">


                        <div class="d-flex w-100 h-100 justify-content-center align-items-center text-center">
                            <p class="display-4 text-light text-shadow">Мониторинг: анкета для осуждённых</p>
                        </div>

                    </div>

                </div>
            </a>

            <a href="/naviny/hatespeech328/">
                <div class="jumbo_wrapper jumbotron d-flex jumbotron-fluid justify-content-center align-items-center px-3 my-0">
                    <div class="img_holder" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
                                    url(<?php bloginfo('template_url'); ?>/images/hate-speech.jpg);"></div>

                    <div class="align-items-end post_thumbnail p-3 d-flex  flex-column">


                        <div class="d-flex w-100 h-100 justify-content-center align-items-center text-center">
                            <p class="display-4 text-light text-shadow">Язык вражды: памятка для журналистов</p>
                        </div>

                    </div>

                </div>
            </a>

            <a href="/naviny/narkotizacija-i-avtoritarizm-film-pro-bielaruskuju-vojnu-s-narkotikami/">
                <div class="jumbo_wrapper jumbotron d-flex jumbotron-fluid justify-content-center align-items-center px-3 my-0">
                    <div class="img_holder" style="background-image: linear-gradient(rgba(0,0,0,0.5),rgba(0,0,0,0.5)),
                                    url(<?php bloginfo('template_url'); ?>/images/narcotisation-and-authoritarianism.jpg);"></div>

                    <div class="align-items-end post_thumbnail p-3 d-flex  flex-column">


                        <div class="d-flex w-100 h-100 justify-content-center align-items-center text-center">
                            <p class="display-4 text-light text-shadow">Наркотизация и авторитаризм: документальный фильм</p>
                        </div>

                    </div>

                </div>
            </a>

            <div class="container pb-4 pt-5 text-center">
                <p class="display-4">Новости</p>
            </div>

            <div class="container pb-5">

                <div class="row ">

                    <?php
                    $args = array('post_type' => 'post', 'posts_per_page' => 11);
                    $post_query = new WP_Query($args);
                    if($post_query->have_posts() ) {
                    while($post_query->have_posts() ) {
                    $post_query->the_post();
                    ?>


                    <div class="col-lg-3 col-md-4 col-sm-6 p-0">
                        <a href="<?php echo the_permalink() ?>">
                            <div class="post_wrapper">

                                <div class="img_holder" style="background-image: linear-gradient(rgba(0,0,0,0),rgba(0,0,0,0.9)),
                                    url(<?php the_post_thumbnail_url('medium_large'); ?>);"></div>

                                <div class="align-items-end post_thumbnail p-3 d-flex  flex-column">

                                    <div class="mb-auto">
                                        <span class="badge badge-secondary">
                                        <?php echo get_the_date( 'j F Y' ); ?>
                                        </span>
                                    </div>

                                    <div class="d-flex w-100">
                                        <p class="lead text-shadow text-light mb-0 pb-0"><?php the_title(); ?></p>
                                    </div>

                                </div>


                            </div>
                        </a>

                    </div>

                    <?php }}?>
					
					
										<div class="col-lg-3 col-md-4 col-sm-6 p-0">
                        <a href="https://legalizebelarus.org/naviny/">
                            <div class="post_wrapper" style="background: linear-gradient( rgba(0,0,0,0.1), rgba(0,0,0,0.1));">
                                <div class="img_holder d-flex flex-column justify-content-center align-items-center text-center text-dark h-100 px-3">
									<div class="display-4">🗞</div>
									<p class="display-4">Все новости</p>
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
                <a target="_blank" href="https://www.youtube.com/channel/UCFwygSKPi82hIlOVCF-2elg"><img class="si2"
                                                                                                        src="<?php bloginfo('template_url'); ?>/images/links/youtube.png"></a>
                <a target="_blank" href="https://t.me/LegalizeBelarus"><img class="si2"
                                                                            src="<?php bloginfo('template_url'); ?>/images/links/telegram.png"></a>
                <a target="_blank" href="https://www.patreon.com/LegalizeBelarus"><img class="si2"
                                                                                       src="<?php bloginfo('template_url'); ?>/images/links/patreon.png"></a>
                <a target="_blank" href="https://github.com/LegalizeBelarus"><img class="si2"
                                                                                  src="<?php bloginfo('template_url'); ?>/images/links/github.png"></a>
                <a target="_blank" href="https://rarible.com/legalizebelarus"><img class="si2"
                                                                                   src="<?php bloginfo('template_url'); ?>/images/links/rarible.png"></a>
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

        </section>
    </main>
</div>

<?php get_footer(); ?>


