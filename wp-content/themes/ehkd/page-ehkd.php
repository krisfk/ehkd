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

                <h1 class="banner-title mt-5">易用錢 EHKD</h1>



            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/assets/images/page-ehkd-banner.jpg" alt="">
</div>

<div class="container mt-5">


    <img class="ehkd-img" src="<?php echo get_template_directory_uri();?>/assets/images/ehkd.png" alt="">

    <div class="content-txt text-center mt-5">
        「易用錢」採用獨家貸款評估，無須提交TU信貸報告，最快15分鐘助你完成貸款審批。 <br>
        零手續費， 100%現金極速到手！<br>
        申請手續簡單，7X24專人跟進，資料絕對保密，現金周轉輕鬆搞掂！
    </div>
    <div class="row mt-5">

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

<div class="light-blue-gradient-div mt-5">


    <div class="light-blue-inner-content text-center">

        <div class="bold-title">申請條件</div>

        <div class="txt">
            年滿18歲香港永久居民 <br>
            最近3個月入息證明<br>
            最近3個月的住址證明
        </div>

        <a class="apply-btn" href="#">立即申請</a>


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