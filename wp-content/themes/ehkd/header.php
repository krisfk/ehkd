<?php
/**
 * The header.
 *
 * This is the template that displays all of the <head> section and everything up until main.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>
<!doctype html>
<html <?php language_attributes(); ?> <?php twentytwentyone_the_html_classes(); ?>>

<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
</head>

<body <?php body_class(); ?>>
    <?php wp_body_open(); ?>
    <div id="page" class="site">
        <!-- <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a> -->

        <?php // get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">


                    <div class="container">


                        <div class="top-div">
                            <a href="<?php echo get_site_url();?>" class="ehkd-logo-a"><img class="ehkd-logo"
                                    src="<?php echo get_template_directory_uri();?>/assets/images/ehkd-logo.png"
                                    alt=""></a>

                            <ul class="top-menu">
                                <li><a class="level-1" href="<?php echo get_site_url();?>/about">關於我們</a>
                                </li>
                                <li><a class="menu-products-a level-1" href="<?php echo get_site_url();?>/ehkd">貸款產品</a>
                                    <ul class="top-menu-submenu">
                                        <li>
                                            <a href="<?php echo get_site_url();?>/ehkd">易用錢</a>
                                        </li>
                                        <li>
                                            <a
                                                href="<?php echo get_site_url();?>/property-owner-personal-loan">業主私人貸款</a>
                                        </li>
                                        <li>
                                            <a
                                                href="<?php echo get_site_url();?>/special-personal-loan-program-for-civil-servant">公務員低息貸款</a>
                                        </li>
                                        <li>
                                            <a href="<?php echo get_site_url();?>/mortgage-loan">物業貸款</a>
                                        </li>
                                        <li>
                                            <a
                                                href="<?php echo get_site_url();?>/digital-currency-mortgage">數字貨幣抵押貸款</a>
                                        </li>
                                    </ul>
                                </li>
                                <li><a href="javascript:void(0);" class="level-1">貸款計數機</a>
                                </li>
                                <li><a href="javascript:void(0);" class="level-1">立即申請</a>
                                </li>
                                <li><a href="javascript:void(0);" class="level-1">聯絡我們</a>
                                </li>

                                <li>

                                    <div class="lang-div">
                                        <a href="javascript:void(0);">繁</a>/
                                        <a href="javascript:void(0);">簡</a>/
                                        <a href="javascript:void(0);">ENGLISH</a>

                                    </div>
                                </li>
                            </ul>


                        </div>
                    </div>

                    <script type="text/javascript">
                    $(function() {

                        $('.top-menu li a.level-1').mouseenter(function() {

                            if ($(this).hasClass('menu-products-a')) {
                                $('.top-menu-submenu').fadeIn(0);

                            } else {
                                $('.top-menu-submenu').fadeOut(0);

                            }

                        })

                        $('.main-banner').mouseenter(function() {
                            $('.top-menu-submenu').fadeOut(0);
                        });

                        $('.top-menu-submenu').mouseleave(function() {
                            $('.top-menu-submenu').fadeOut(0);
                        })

                    })
                    </script>