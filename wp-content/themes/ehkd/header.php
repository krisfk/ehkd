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

    <?php
// $args = array('post_type'=> 'config');              
// $the_query = new WP_Query( $args );
// if($the_query->have_posts() ) {
//        $the_query->the_post(); 
//        $whatsapp =  get_field('whatsapp');
//         $no1 = substr($whatsapp, 0, 4);
//         $no2 = substr($whatsapp, 4, 4);
//         echo $no1.' '.$no2;
//     wp_reset_postdata(); 
// }
?>

    <img class="d-none" src="<?php echo get_template_directory_uri();?>/assets/images/arrow-d.svg" alt="">

    <div class=" mobile-menu-overlay">

        <?php
    
    if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
        $lang_code =  ICL_LANGUAGE_CODE;
    }
    
    switch ($lang_code)
    {
        case 'zh-hant':
            $main_menu = wp_get_menu_array('top menu');
            // $top_menu = wp_get_menu_array('top menu');

            break;
            case 'cn':
                $main_menu = wp_get_menu_array('top menu cn');


            break;
                case 'en':
                    $main_menu = wp_get_menu_array('top menu en');

            break;
    }
    ?>


        <ul class="mobile-menu">

            <?php


foreach ($main_menu as $menu_item) {

$url = $menu_item['url'];
$title = $menu_item['title'];
$temp_arr=explode(get_site_url(),$url);
$slug=str_replace('/en/','',$temp_arr[1]);
$slug=str_replace('/cn/','',$slug);
$slug=str_replace('/','',$slug);


if(count($menu_item['children']))
{
    // $sub_slugs='';
    // foreach ($menu_item['children'] as $sub_menu_item) 
    // {
    //     $sub_url = $sub_menu_item['url'];
    //     $sub_temp_arr=explode(get_site_url(),$sub_url);

    //     $sub_slug=str_replace('/en/','',$sub_temp_arr[1]);
    //     $sub_slug=str_replace('/cn/','',$sub_slug);
    //     $sub_slug=str_replace('/','',$sub_slug);

    //     $sub_slugs.=$sub_slug.' ';
    // }
    echo '<li><a class="level-1 parent" href="'.$url.'">'.$title.'</a>';

 
    echo '<ul class="mobile-menu-submenu">';
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
?>
            <li>

                <div class="lang-div">
                    <a href="<?php echo $langs['zh-hant']['url'];?>">繁</a><span class="sep">/</span><a
                        href="<?php echo $langs['cn']['url'];?>">簡</a>
                    <!-- <span
            class="sep">/</span><a href="<?php echo $langs['en']['url'];?>">ENGLISH</a> -->

                </div>
            </li>

        </ul>

    </div>

    <div id="page" class="site">
        <!-- <a class="skip-link screen-reader-text"
            href="#content"><?php esc_html_e( 'Skip to content', 'twentytwentyone' ); ?></a> -->

        <?php // get_template_part( 'template-parts/header/site-header' ); ?>

        <div id="content" class="site-content">
            <div id="primary" class="content-area">
                <main id="main" class="site-main" role="main">


                    <div class="container">



                        <?php

$my_home_url = apply_filters( 'wpml_home_url', get_option( 'home' ) );?>


                        <div class="top-div">
                            <a href="<?php echo $my_home_url;?>" class="ehkd-logo-a"><img class="ehkd-logo"
                                    src="<?php echo get_template_directory_uri();?>/assets/images/ehkd-logo.png"
                                    alt=""></a>



                            <button class="mobile-menu-btn"
                                onclick="this.classList.toggle('opened');this.setAttribute('aria-expanded', this.classList.contains('opened'))"
                                aria-label="Main Menu">
                                <svg width="50" height="50" viewBox="0 0 100 100">
                                    <path class="line line1"
                                        d="M 20,29.000046 H 80.000231 C 80.000231,29.000046 94.498839,28.817352 94.532987,66.711331 94.543142,77.980673 90.966081,81.670246 85.259173,81.668997 79.552261,81.667751 75.000211,74.999942 75.000211,74.999942 L 25.000021,25.000058" />
                                    <path class="line line2" d="M 20,50 H 80" />
                                    <path class="line line3"
                                        d="M 20,70.999954 H 80.000231 C 80.000231,70.999954 94.498839,71.182648 94.532987,33.288669 94.543142,22.019327 90.966081,18.329754 85.259173,18.331003 79.552261,18.332249 75.000211,25.000058 75.000211,25.000058 L 25.000021,74.999942" />
                                </svg>
                            </button>


                            <ul class="top-menu">

                                <?php
                               

                            if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
                                $lang_code =  ICL_LANGUAGE_CODE;
                            }
                            
                            switch ($lang_code)
                            {
                                case 'zh-hant':
                                    $top_menu = $main_menu;
                                    // $top_menu = wp_get_menu_array('top menu');

                                    break;
                                    case 'cn':
                                        $top_menu =$main_menu;


                                    break;
                                        case 'en':
                                            $top_menu = $main_menu;

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
                            ?>
                                <li>

                                    <div class="lang-div">
                                        <a href="<?php echo $langs['zh-hant']['url'];?>">繁</a><span
                                            class="sep">/</span><a href="<?php echo $langs['cn']['url'];?>">簡</a>
                                        <!-- <span
                                            class="sep">/</span><a href="<?php echo $langs['en']['url'];?>">ENGLISH</a> -->

                                    </div>
                                </li>

                            </ul>




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



                        $('.mobile-menu-overlay .mobile-menu a.parent').click(function(e) {
                            e.preventDefault();
                            $(this).toggleClass('active');

                            if ($(this).hasClass('active')) {
                                $('.mobile-menu-submenu').slideDown(200);
                            } else {
                                $('.mobile-menu-submenu').fadeOut(0);

                            }

                        })

                        $('.mobile-menu-btn').click(function() {

                            if ($(this).hasClass('opened')) {

                                $('.mobile-menu-overlay').fadeIn(200);
                            } else {
                                $('.mobile-menu-overlay').fadeOut(0);

                            }
                        })
                    })
                    </script>

                    <?php
        $args = array('post_type'=> 'config');              
        $the_query = new WP_Query( $args );
        if($the_query->have_posts() ) {
        //        $the_query->the_post(); 
        //        $whatsapp =  get_field('whatsapp');
        }
        ?>
                    <!-- <a class="wts-icon-a" href="https://api.whatsapp.com/send?phone=852<?php echo $whatsapp;?>"></a> -->