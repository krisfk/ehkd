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

                <h1 class="banner-title mt-5">業主私人貸款</h1>



            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/assets/images/personal-loan-banner.jpg" alt="">
</div>

<div class="container mt-5">




    <div class="content-txt text-center mt-5">

        只要你是居屋或公屋業主，毋須抵押物業，都可申請特大額私人貸款，助你抓住時代機遇， <br>
        有效善用資金作投資、翻新家居或其他生活所需，靈活理財，解決燃眉之急。
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

<div class="container">

    <div class="row">

        <div class="col-lg-4">

            <div class="footer-lightblue-title mt-5">立即申請</div>

            <div class="footer-apply-btn-above-txt mt-3">您可透過網上或客戶服務熱線進行貸款申請。康業為您提供特快申請：15分鐘初步審批，24小時過數。</div>

            <a href="#" class="footer-apply-btn mt-4">網上申請</a>
        </div>
        <div class="col-lg-8">


            <div class=" footer-sitemap mt-5">
                <div class="footer-sitemap-branch">

                    <ul>
                        <li>
                            <h2>貸款產品</h2>
                        </li>
                        <li><a href="#">數字貨幣抵押貸款</a></li>
                        <li><a href="#">易用錢</a></li>
                        <li><a href="#">物業貸款</a></li>
                        <li><a href="#">業主私人貸款</a></li>
                        <li><a href="#">公務員低息貸款</a></li>
                    </ul>







                </div>
                <div class="footer-sitemap-branch">

                    <ul>
                        <li>
                            <h2> 公司資訊</h2>
                        </li>
                        <li><a href="#">關於我們</a></li>
                        <li><a href="#">媒體</a></li>
                        <li><a href="#">最新資訊</a></li>
                        <li><a href="#">常見問題</a></li>
                    </ul>




                </div>
                <div class="footer-sitemap-branch">

                    <ul>
                        <li>法律聲明</li>
                        <li>免責條款</li>
                        <li>私隱聲明</li>
                        <li>貸款申請條款</li>
                    </ul>
                </div>
                <div class="footer-sitemap-branch">
                    <ul>

                        <li>
                            <h2> 放債人牌照號碼 </h2>
                        </li>
                        <li> 香港數字資產信貸有限公司：168/2021
                        </li>
                    </ul>







                </div>


                <div class="text-start mt-4">


                    <div class="d-inline-block me-4 ">

                        <span class="footer-phone footer-phone-1"> 2628 2828</span>

                        <div class="footer-under-phone-txt">忠告：借錢梗要還，咪俾錢中介</div>


                    </div>
                    <div class="d-inline-block">

                        <span class="footer-phone footer-phone-2"> 5700 8888</span>
                        <div class="footer-under-phone-txt">投訴熱線：2523 7861</div>

                    </div>
                </div>
            </div>
        </div>

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