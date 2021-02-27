<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

get_header();

?>



<div class="container">


    <div class="top-div">
        <a href="javascript:void(0);" class="ehkd-logo-a"><img class="ehkd-logo"
                src="<?php echo get_template_directory_uri();?>/assets/images/ehkd-logo.png" alt=""></a>

        <ul class="top-menu">
            <li><a href="javascript:void(0);">關於我們</a>
            </li>
            <li><a href="javascript:void(0);">貸款產品</a>
            </li>
            <li><a href="javascript:void(0);">貸款計數機</a>
            </li>
            <li><a href="javascript:void(0);">立即申請</a>
            </li>
            <li><a href="javascript:void(0);">聯絡我們</a>
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
<div class="main-banner">

    <div class="home-main-banner-inner-div">


        <div class="inner-msg-div-outer">
            <div class="inner-msg-div container">

                <div class="inner-msg-div-inner-div">

                    <img class="home-banner-innner-img"
                        src="<?php echo get_template_directory_uri();?>/assets/images/home-banner-innner-img.png"
                        alt="">

                    <div class="mt-5 text-center"> <a href="javascript:void(0);" class="apply-now-btn">立即申請</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/assets/images/home-banner.jpg" alt="">
</div>

<div class="container mt-5">


    <div class="row">

        <div class="col-lg-3"> <img class="home-point-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/home-icon-1.png" alt="">
            <div class="text-center home-point-txt">獨家貸款評估 <br>
                <span class="small">(免查TU信貸評級)</span>
            </div>
        </div>
        <div class="col-lg-3"><img class="home-point-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/home-icon-2.png" alt="">
            <div class="text-center home-point-txt">最快15分鐘批核</div>
        </div>
        <div class="col-lg-3"><img class="home-point-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/home-icon-3.png" alt="">
            <div class="text-center home-point-txt">靈活慳息 <br>
                利息逐日計</div>
        </div>
        <div class="col-lg-3"><img class="home-point-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/home-icon-4.png" alt="">

            <div class="text-center home-point-txt">現金即到手</div>
        </div>
    </div>

</div>


<!-- <div class="container"> -->

<div class="row">

    <div class="col-3 g-0">
        <img class="rect-img" src="<?php echo get_template_directory_uri();?>/assets/images/home-rect-img-1.jpg" alt="">
    </div>
    <div class="col-3 g-0">
        <img class="rect-img" src="<?php echo get_template_directory_uri();?>/assets/images/home-rect-img-2.jpg" alt="">
    </div>
    <div class="col-3 g-0">
        <img class="rect-img" src="<?php echo get_template_directory_uri();?>/assets/images/home-rect-img-3.jpg" alt="">
    </div>
    <div class="col-3 g-0">
        <img class="rect-img" src="<?php echo get_template_directory_uri();?>/assets/images/home-rect-img-4.jpg" alt="">
    </div>

</div>

<!-- </div> -->
</div>



<script type="text/javascript">
$(function() {

    // $(window).load(function() {

    // })
})

window.onload = function() {
    $('.inner-msg-div-inner-div').height($('.inner-msg-div-outer').height()).css({
        'opacity': '1'
    });
}
</script>


<?php
get_footer();