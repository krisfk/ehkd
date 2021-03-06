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



<div class="main-banner">

    <div class="home-main-banner-inner-div">


        <div class="inner-msg-div-outer">
            <div class="inner-msg-div container">

                <div class="inner-msg-div-inner-div">

                    <img class="home-banner-innner-img"
                        src="<?php echo get_template_directory_uri();?>/assets/images/home-banner-innner-img.png"
                        alt="">

                    <div class="mt-5 text-center"> <a href="javascript:void(0);" class="apply-now-btn">立即申請ff</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/assets/images/home-banner.jpg" alt="">
</div>

<div class="container mt-5">


    <div class="row">

        <div class="col-lg-3"> <img class="large-point-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/home-icon-1.png" alt="">
            <div class="text-center large-point-txt">獨家貸款評估 <br>
                <span class="small">(免查TU信貸評級)</span>
            </div>
        </div>
        <div class="col-lg-3"><img class="large-point-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/home-icon-2.png" alt="">
            <div class="text-center large-point-txt">最快15分鐘批核</div>
        </div>
        <div class="col-lg-3"><img class="large-point-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/home-icon-3.png" alt="">
            <div class="text-center large-point-txt">靈活慳息 <br>
                利息逐日計</div>
        </div>
        <div class="col-lg-3"><img class="large-point-icon"
                src="<?php echo get_template_directory_uri();?>/assets/images/home-icon-4.png" alt="">

            <div class="text-center large-point-txt">現金即到手</div>
        </div>
    </div>

</div>


<!-- <div class="container"> -->

<div class="row mt-5">

    <div class="col-3 g-0">
        <img class="rect-img" src="<?php echo get_template_directory_uri();?>/assets/images/home-rect-img-1.jpg" alt="">
        <div class="rect-img-txt">業主私人貸款</div>
    </div>
    <div class="col-3 g-0">
        <img class="rect-img" src="<?php echo get_template_directory_uri();?>/assets/images/home-rect-img-2.jpg" alt="">

        <div class="rect-img-txt">公務員低息貨款</div>
    </div>
    <div class="col-3 g-0">
        <img class="rect-img" src="<?php echo get_template_directory_uri();?>/assets/images/home-rect-img-3.jpg" alt="">
        <div class="rect-img-txt">物業貸款</div>
    </div>
    <div class="col-3 g-0">
        <img class="rect-img" src="<?php echo get_template_directory_uri();?>/assets/images/home-rect-img-4.jpg" alt="">
        <div class="rect-img-txt">數字貨幣抵押貸款</div>
    </div>

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