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

    <link rel="stylesheet" href="<?php echo get_template_directory_uri();?>/cal.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous">
    </script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"
        integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <!-- <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css"> -->

    <!-- <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script> -->

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

                                <?php
                                // zh-hant
                                //cn
                                //en

                            if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
                                $lang_code =  ICL_LANGUAGE_CODE;
                            }
                            
                            switch ($lang_code)
                            {
                                case 'zh-hant':
                                    $top_menu = wp_get_menu_array('top menu');

                                    break;
                                    case 'cn':
                                        $top_menu = wp_get_menu_array('top menu cn');


                                    break;
                                        case 'en':
                                            $top_menu = wp_get_menu_array('top menu en');

                                    break;
                            }


                            foreach ($top_menu as $menu_item) {

                                $url = $menu_item['url'];
                                $title = $menu_item['title'];
                                $temp_arr=explode(get_site_url(),$url);
                                $slug=str_replace('/en/','',$temp_arr[1]);
                                $slug=str_replace('/cn/','',$slug);
                                $slug=str_replace('/','',$slug);

                                
                                if(count($menu_item['children']))
                                {
                                    $sub_slugs='';
                                    foreach ($menu_item['children'] as $sub_menu_item) 
                                    {
                                        $sub_url = $sub_menu_item['url'];
                                        $sub_temp_arr=explode(get_site_url(),$sub_url);

                                        $sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
                                        $sub_slug=str_replace('/cn/','',$sub_slug);
                                        $sub_slug=str_replace('/','',$sub_slug);

                                        $sub_slugs.=$sub_slug.' ';
                                    }
                                    echo '<li><a class="level-1 '.$sub_slugs.'" href="'.$url.'">'.$title.'</a>';

                                 
                                    echo '<ul class="top-menu-submenu">';
                                    foreach ($menu_item['children'] as $sub_menu_item) 
                                    {
                                        $sub_url = $sub_menu_item['url'];
                                        $sub_title = $sub_menu_item['title'];
                                        $sub_temp_arr=explode(get_site_url(),$sub_url);
                                        $sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
                                        $sub_slug=str_replace('/cn/','',$sub_slug);
                                        $sub_slug=str_replace('/','',$sub_slug);
                                        echo'<li><a class="'.$sub_slug.'" href="'.$sub_url.'">'.$sub_title.'</a></li>';
                                    }
                                    echo '</ul>';

                               }
                               else
                               {
                                echo '<li><a class="level-1 '.$slug.'" href="'.$url.'">'.$title.'</a>';

                               }
                            echo'</li>';


                            }


                            ?>

                                <?php
                            
                            $langs= icl_get_languages('skip_missing=0&orderby=custom&order=asc&link_empty_to=');
                            // print_r($langs);
                            ?>
                                <li>

                                    <div class="lang-div">
                                        <a href="<?php echo $langs['zh-hant']['url'];?>">繁</a><span
                                            class="sep">/</span><a href="<?php echo $langs['cn']['url'];?>">簡</a><span
                                            class="sep">/</span><a href="<?php echo $langs['en']['url'];?>">ENGLISH</a>

                                    </div>
                                </li>

                            </ul>

                            <!-- <ul class="top-menu">
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
                                <li><a href="<?php echo get_site_url();?>/loan-calculator" class="level-1">貸款計數機</a>
                                </li>
                                <li><a href="<?php echo get_site_url();?>/apply" class="level-1">立即申請</a>
                                </li>
                                <li><a href="<?php echo get_site_url();?>/contact" class="level-1">聯絡我們</a>
                                </li>

                                <li>

                                    <div class="lang-div">
                                        <a href="javascript:void(0);">繁</a><span class="sep">/</span><a
                                            href="javascript:void(0);">簡</a><span class="sep">/</span><a
                                            href="javascript:void(0);">ENGLISH</a>

                                    </div>
                                </li>
                            </ul> -->


                        </div>
                    </div>

                    <?php
                    
                    global $post;
                     $page_slug= $post->post_name;
                    ?>

                    <script type="text/javascript">
                    var page_slug = "<?php echo $page_slug?>";
                    $(function() {


                        $('.top-menu li a.level-1.' + page_slug).addClass('active');

                        $('.top-menu li a.level-1').mouseenter(function() {

                            if ($(this).hasClass('ehkd')) {
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