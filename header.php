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
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-D0ZQT73MYH"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'G-D0ZQT73MYH');
    </script>

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
