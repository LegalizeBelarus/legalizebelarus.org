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

        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js?client=ca-pub-8198266697570398"
     crossorigin="anonymous"></script>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="yandex-verification" content="e6da0b755ac20619"/>

    <title><?php wp_title('&laquo;', true, 'right'); ?><?php bloginfo('name'); ?></title>
    <link rel="icon" href="<?php bloginfo('template_url'); ?>/wp-content/themes/legalizebelarus/images/favicon.ico" type="image/x-icon">
    <meta name="viewport" content="width=device-width">
    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>"/>

    <?php wp_head(); ?>

    <!-- Meta Pixel Code -->
<script>
!function(f,b,e,v,n,t,s)
{if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};
if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];
s.parentNode.insertBefore(t,s)}(window, document,'script',
'https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '1597342774167085');
fbq('track', 'PageView');
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=1597342774167085&ev=PageView&noscript=1"
/></noscript>
<!-- End Meta Pixel Code -->
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
