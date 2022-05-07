<!DOCTYPE html>
<!--[if lt IE 7]>
<html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>
<html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>
<html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js"> <!--<![endif]-->
<head>
    <!-- Google Tag Manager -->
    <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
                    new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
                j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
                'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
        })(window,document,'script','dataLayer','GTM-KP4HP55');</script>
    <!-- End Google Tag Manager -->

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="yandex-verification" content="e6da0b755ac20619"/>

    <title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>


    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php wp_head(); ?>
</head>
<body
        <?php body_class(); ?>>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KP4HP55"
                  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

<div class="container bg-light px-0 px-md-5">


    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a href="<?php echo get_home_url(); ?>" class="navbar-brand my-3">
            <div class="d-flex align-items-center" id="brandholder">
                <span id="logoholder" class="mr-3"><img
                            src="<?php bloginfo('template_url'); ?>/images/Legalize_Belarus_logo_250.png" width="50"
                            height="50"></span>
                <span>Legalize Belarus</span>
            </div>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar"
                aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <?php
        wp_nav_menu([
                'menu' => 'top',
                'theme_location' => 'top',
                'container' => 'div',
                'container_id' => 'bs4navbar',
                'container_class' => 'collapse navbar-collapse',
                'menu_id' => false,
                'menu_class' => 'navbar-nav',
                'depth' => 2,
                'fallback_cb' => 'bs4navwalker::fallback',
                'walker' => new bs4navwalker()
        ]);
        ?>


    </nav>
</div>
