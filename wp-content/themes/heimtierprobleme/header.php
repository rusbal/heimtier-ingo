<!doctype html>
<html lang="de">
<head>
    <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title('|', true, 'right'); ?></title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1,user-scalable=yes,maximum-scale=2"/>
    <meta name="apple-mobile-web-app-capable" content="yes"/>
    <meta name="apple-mobile-web-app-status-bar-style" content="black"/>
    <meta name="keywords" content="immobilien, eigentumswohnung, eigentumswohnungen, haus kaufen, feuerthalen, schaffhausen, flurlingen, uhwiesen, dachsen, paradies, diessenhofen, wohnen am rhein, wohnung kaufen, leben am rhein, immobilienangebote, wohnungen, wohnimmobilien" />
    <meta name="revisit-after" content="7 days"/>
    <meta name="author" content="Rhytreat Langwiesen Feuerthalen c/o Maker GmbH, Neuhausen am Rheinfall" />
    <meta name="publisher" content="Maker GmbH, Neuhausen am Rheinfall" />
    <!--[if lt IE 9]>
    <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->
    <?php wp_head(); ?>
</head>
<body>
<div id="outWrap">
    <div id="wrap">
        <section id="header">
            <div id="logo"><a href="/">Heimtierprobleme</a></div>
            <nav id="headerNav">
                <ul>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'header-nav',
                        'container' => false,
                        'items_wrap' => '%3$s',
                        'menu_class' => false,
                    ));
                    ?>
                </ul>
            </nav><!-- #headerNav -->


            <!-- <nav id="mainNav">
                <ul>
                    <?php
                    wp_nav_menu(array(
                        'theme_location' => 'main-nav',
                        'container' => false,
                        'items_wrap' => '%3$s',
                        'menu_class' => false,
                    ));
                    ?>
                </ul>
            </nav> --><!-- #mainNav -->

            <div class="clear"></div>
        </section><!-- #header -->
        <div id="logoPrint"><img src="<?php bloginfo('stylesheet_directory'); ?>/img/logo_h.gif" width="150" height="108"
                                 alt="Heimtierprobleme"></div>
