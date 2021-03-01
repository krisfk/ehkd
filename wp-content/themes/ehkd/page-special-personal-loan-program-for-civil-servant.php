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

                <h1 class="banner-title mt-5">公務員低息貸款</h1>



            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/assets/images/civil-loan-banner.jpg" alt="">
</div>

<div class="container mt-5">



    <div class="blue-title text-center">

        短期周轉首選 <br>
        貸款額最高 <span class="big"> 可達月薪5倍</span>



    </div>

    <div class="content-txt text-center mt-5">

        一時手頭緊，又唔想整花個人信貸評級，影響前途? <br>
        不論你是公務員、醫護人員或老師，只需出示職員證件，毋須上傳環聯信貸紀錄也可申請貸款， <br>
        更可享特低利息循環貸款，最快即日批核現金，周轉暢通無阻!

    </div>

    <div class="container mt-5">


        <div class="d-table">

            <!-- <div class="col-lg-6"> -->

            <div class="d-table-cell w-50">
                <img class="w-100" src="<?php echo get_template_directory_uri();?>/assets/images/civil-loan-img.jpg"
                    alt="">
                <!-- </div> -->
                <!-- <div class="col-lg-6"> -->

            </div>
            <div class="d-table-cell w-50 align-middle">
                <ul class=" big-point-ul">

                    <li>不損信貸評級</li>
                    <li>特快批核</li>
                    <li>利息特低</li>
                </ul>


            </div>

            <!-- </div> -->

        </div>

    </div>



</div>


<!-- <div class="container"> -->

<div class="light-blue-gradient-div mt-5">


    <div class="light-blue-inner-content text-center">

        <div class="bold-title">申請條件</div>

        <div class="txt">
            公務員/醫護人員特享低息 <br>
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