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

                <h1 class="banner-title mt-5">關於我們</h1>



            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/assets/images/page-about-banner.jpg" alt="">
</div>

<div class="container mt-5">


    <div class="row">

        <div class="col-lg-6">
            <img class="w-100" src="<?php echo get_template_directory_uri();?>/assets/images/page-about-img-1.jpg"
                alt="">
        </div>
        <div class="col-lg-6">
            <div class="blue-title">
                香港數字資產信貸有限公司</div>
            <div class="content-txt mt-3 text-justify">
                為香港數字資產交易所集團成員，香港持牌信貸機構。作為創新型的信貸機構，公司依托香港數字資產交易所（HKD.com）强大的技術及資金支持，與時俱進，結合金融科技，迎合數字資產熱潮，率先推出多個與數字資產相關的信貸產品，以滿足客戶與日俱增的財務需要。
            </div>


        </div>

    </div>

</div>


<!-- <div class="container"> -->

<div class="row mt-5">

    <div class="col-12 five-points-top-div">立即申請</div>
    <div class="col g-0">
        <img class="rect-img" src="<?php echo get_template_directory_uri();?>/assets/images/about-rect-img-1.jpg"
            alt="">
        <div class="rect-img-txt">易用錢</div>
    </div>

    <div class="col g-0">
        <img class="rect-img" src="<?php echo get_template_directory_uri();?>/assets/images/home-rect-img-1.jpg" alt="">
        <div class="rect-img-txt">業主私人貸款</div>
    </div>
    <div class="col g-0">
        <img class="rect-img" src="<?php echo get_template_directory_uri();?>/assets/images/home-rect-img-2.jpg" alt="">

        <div class="rect-img-txt">公務員低息貨款</div>
    </div>
    <div class="col g-0">
        <img class="rect-img" src="<?php echo get_template_directory_uri();?>/assets/images/home-rect-img-3.jpg" alt="">
        <div class="rect-img-txt">物業貸款</div>
    </div>
    <div class="col g-0">
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