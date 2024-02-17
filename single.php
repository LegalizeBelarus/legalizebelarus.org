<?php get_header(); ?>
<main role="main">
    <section>

        <div class="container cont bg-light pb-5 pt-4 px-0 px-md-5">

            <?php setPostViews( get_the_ID() ); ?>

            <div class="container pb-3">
                <h1 class="display-4"><?php the_title(); ?></h1>

            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-9">
                        <div class="container lead-bold mb-4">
                            <?php if ( ! has_excerpt() ) {
                                echo '';
                            } else {
                                the_excerpt();
                            } ?>
                        </div>
                    </div>
                </div>
            </div>

            <?php
            $post_thumbnail_attr = array(
                    'alt'   => get_the_title(),
                    'title' => get_the_title(),
                    'style' => 'max-width:100%;height:100%;width:100%;min-height:100%;object-fit:cover;'
            );

            $disable_thumbnail = get_post_meta( get_the_ID(), 'disable_thumbnail', true );
            if ( $disable_thumbnail !== '1' ) { ?>

                <div class="container">
                    <div class="row flex-column-reverse flex-md-row">

                        <div class="col-md-9 pb-3">
                            <?php the_post_thumbnail( 'medium_large', $post_thumbnail_attr ); ?>
                        </div>

                        <div class="col-md-3 pb-4">
                        <div class="container">
                            <div class="lead"><?php echo get_post_meta( get_the_ID(), 'author', true ) ?></div>
                            <div class="lead mb-2"><?php echo get_the_date( 'j F Y' ); ?></div>

                            <?php
                            foreach ( ( get_the_category() ) as $category ) { ?>
                                <a href="<?php echo get_category_link( $category ) ?>">
                                    <div class="badge-primary badge shadow mt-1 mb-4"> <?php
                                        echo $category->cat_name; ?>
                                    </div>
                                </a> <?php
                            } ?>


                            <?php if ( ! function_exists( 'dynamic_sidebar' ) || ! dynamic_sidebar( "posts-sidebar" ) ) : ?>
                            <?php endif; ?>
                        </div>

                        </div>

                    </div>
                </div>

            <?php }; ?>

            <!--Turn off views counter-->
            <!--                        <div class="d-flex w-100 views_container justify-content-end px-3 pb-4">-->
            <!--                            <div class="d-flex align-items-end">-->
            <!--                                <div class="d-inline-flex px-1 m-3 badge-secondary badge">-->
            <!---->
            <!--                                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-eye-fill"-->
            <!--                                         fill="black"-->
            <!--                                         xmlns="http://www.w3.org/2000/svg">-->
            <!--                                        <path d="M10.5 8a2.5 2.5 0 1 1-5 0 2.5 2.5 0 0 1 5 0z"/>-->
            <!--                                        <path fill-rule="evenodd"-->
            <!--                                              d="M0 8s3-5.5 8-5.5S16 8 16 8s-3 5.5-8 5.5S0 8 0 8zm8 3.5a3.5 3.5 0 1 0 0-7 3.5 3.5 0 0 0 0 7z"/>-->
            <!--                                    </svg>-->
            <!---->
            <!--                                    <span>&nbsp-->
            <?php //echo getPostViews(get_the_ID()); ?><!--</span>-->
            <!---->
            <!--                                </div>-->
            <!--                            </div>-->
            <!--                        </div>-->

            <div class="container">
                <div class="row">

                    <div class="col-md-9">

                        <div class="container my-4">
                            <?php the_post();
                            the_content(); ?>
                        </div>

                        <?php

                        $supportTexts = [
                            'be_BY' => [
                                'header' => '&#128147; Нам патрэбна ваша дапамога',
                                'body' => 'Калі вам падабаецца, што робіць Legalize Belarus — падтрымайце нас праз <a href="https://www.patreon.com/LegalizeBelarus">Patreon</a> або <a href="/padtrymajcie/">іншым</a> спосабам. Гэта бяспечна. Сродкі пойдуць на аплату дамена і хостынга сайта, правядзенне мерапрыемстваў, рэкламу ў сацсетках, друк стыкераў і ўлётак, запіс і мантаж новых відэа і інш.',
                            ],
                            'en_GB' => [
                                'header' => '&#128147; We need your support',
                                'body' => 'If you like what Legalize Belarus is doing, support us on <a href="https://www.patreon.com/LegalizeBelarus">Patreon</a> or in <a href="/en/support/">another way</a>. The funds will be spent on website domain and hosting, events, social media advertising, sticker and flyer printing, recording and editing new videos, and more.',
                            ],
                            'ru_RU' => [
                                'header' => '&#128147; Нам нужна ваша поддержка',
                                'body' => 'Если вам нравится, что делает Legalize Belarus — поддержите нас через <a href="https://www.patreon.com/LegalizeBelarus">Patreon</a> либо <a href="/padtrymajcie/">иным</a> способом. Это безопасно. Средства пойдут на оплату домена и хостинга сайта, проведение мероприятий, рекламу в соцсетях, печать стикеров и листовок, запись и монтаж новых видео и др.',
                            ],
                        ];

                        $locale = get_locale();

                        if (isset($supportTexts[$locale])) {
                            $template = '<div id="support-us-block"><div id="support-us-block-header">%s</div><div id="support-us-block-body">%s</div></div>';
                            echo sprintf(
                                $template,
                                $supportTexts[$locale]['header'],
                                $supportTexts[$locale]['body']
                            );
                        };
                        ?>
                    </div>

                    <div class="col-md-3">

                        <div class="container mb-4 mt-4 mt-md-0">
                            <?php
                            $license = get_post_meta( get_the_ID(), 'custom_license', true );

                            if ( $license == '0' ) { ?>

                                <a rel="license" href="http://creativecommons.org/licenses/by/4.0/"><img
                                            alt="Creative Commons Licence"
                                            src="https://i.creativecommons.org/l/by/4.0/88x31.png"/></a>

                                <p class="mt-2"><?php _e( 'Unless otherwise noted, text of this article is licensed under the Creative Commons Attribution 4.0 International License.', 'legalizebelarus' ); ?></p>
                                <?php
                            } else { ?>
                                <p> <?php echo $license; ?> </p> <?php
                            };
                            ?>
                        </div>

                        <div class="mb-4 mt-4 mt-md-0">
                            <?php
                            $license_image = get_post_meta( get_the_ID(), 'custom_license_image', true );

                            if ( $license_image !== '0' ) {
                                echo $license_image;
                            };
                            ?>
                        </div>


                        <?php get_sidebar(); ?>
                    </div>

                </div>
            </div>


        </div>

    </section>
</main>
<?php get_footer(); ?>
