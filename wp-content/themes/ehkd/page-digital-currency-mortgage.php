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

                <h1 class="banner-title mt-5">數字貨幣抵押貸款</h1>



            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/assets/images/digital-currency-mortgage-banner.jpg" alt="">
</div>

<div class="container mt-5">



    <div class="blue-title text-center">


        <span class="big"> 數字貨幣</span>在手 <br>
        現金<span class="big">想借就有</span>




    </div>

    <div class="content-txt text-center mt-5">


        一時手頭緊，又唔想賣出數字貨幣？質押指定數字資產，借入港幣，實現數字資產最大價值。 <br>
        質押幣種多元，支持BTC，ETH，USDT等，更可享特低利息循環貸款， <br>
        最快即日批核現金，還款周期長，隨借隨還，周轉暢通無阻!

    </div>

    <div class="row mt-5">


        <div class="col-lg-4"><img class="large-point-icon"
                src="http://104.248.237.5/wp-content/themes/ehkd/assets/images/dcm-icon-1.png" alt="">
            <div class="text-center large-point-txt"> <span class="big"> 多種幣種可供選擇</span><br>
                可以選擇多種質押幣種</div>
        </div>
        <div class="col-lg-4"><img class="large-point-icon"
                src="http://104.248.237.5/wp-content/themes/ehkd/assets/images/dcm-icon-2.png" alt="">
            <div class="text-center large-point-txt">
                <span class="big">安全</span><br>
                不同的質押幣種有不同的質押率
            </div>
        </div>
        <div class="col-lg-4"><img class="large-point-icon"
                src="http://104.248.237.5/wp-content/themes/ehkd/assets/images/dcm-icon-3.png" alt="">

            <div class="text-center large-point-txt">
                <span class="big"> 便捷</span> <br>
                借得的款項可立即提現
            </div>
        </div>
    </div>


</div>


<!-- <div class="container"> -->

<div class="light-blue-gradient-div mt-5">


    <div class="light-blue-inner-content text-center">

        <div class="bold-title">申請條件</div>

        <div class="txt">
            HKD.com注冊用戶 <br>
            年滿18歲香港永久居民 <br>
            最近3個月入息證明 <br>
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