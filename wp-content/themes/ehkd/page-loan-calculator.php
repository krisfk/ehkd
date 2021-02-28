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

                <h1 class="banner-title mt-5 blue">貸款計算機</h1>



            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/assets/images/loancal-banner.jpg" alt="">
</div>

<div class="container mt-5">



    <div class="blue-title text-center">



        貸款計算機





    </div>

</div>

<div class="purple-gradient-div mt-5">


    <div id="calculator">
        <div class="main container">
            <div class="mainImgWrapper row">
                <div class="col-xs-12 col-md-6 input">
                    <div class="row">
                        <div class="col-md-6 col-xs-5 calc_label">申請貸款額</div>
                        <div class="col-md-6 col-xs-7 calc_value_wrapper">
                            <div class="calc_value">
                                <input class="calc_loanAmount" type="text" value="0" placeholder="0" tabindex="1"><span
                                    class="calc_unit">HK$</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 sliderWrapper">
                            <input id="ex1" data-slider-id="ex1Slider" type="text" data-slider-min="0"
                                data-slider-max="2000000" data-slider-step="10000" data-slider-value="0"
                                data-slider-tooltip="hide" data-slider-handle="square">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-5 calc_label">每月利率</div>
                        <div class="col-md-6 col-xs-7 calc_value_wrapper">
                            <div class="calc_value">
                                <input class="calc_monthlyInterestRate" type="text" value="0" placeholder="0"
                                    tabindex="2"><span class="calc_unit">%</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 sliderWrapper">
                            <input id="ex2" data-slider-id="ex1Slider" type="text" data-slider-min="0"
                                data-slider-max="5" data-slider-step="0.1" data-slider-value="0"
                                data-slider-tooltip="hide" data-slider-handle="square">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 col-xs-5 calc_label">還款期</div>
                        <div class="col-md-6 col-xs-7 calc_value_wrapper">
                            <div class="calc_value">
                                <input class="calc_repaymentPeriod" type="text" value="0" placeholder="0"
                                    tabindex="3"><span class="calc_unit">個月</span>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 col-xs-12 sliderWrapper">
                            <input id="ex3" data-slider-id="ex1Slider" type="text" data-slider-min="0"
                                data-slider-max="60" data-slider-step="1" data-slider-value="0"
                                data-slider-tooltip="hide" data-slider-handle="square">
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-md-6">
                    <div class="output">
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="title">每月總還款額</div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12 col-xs-12">
                                <div class="monthlyRepaymentWrapper">
                                    <span class="unit">HK$</span>
                                    <span class="amount">0</span>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-8 col-xs-12">
                                <div class="chart_wrapper">
                                    <div class="c100 big" id="circle">
                                        <span class="circle_title">總還款額</span>
                                        <span class="circle_value">HK$0</span>
                                        <div class="slice">
                                            <div class="bar"></div>
                                            <div class="fill"></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4 col-xs-12 custom_margin">
                                <div class="row">
                                    <div class="col-md-12 col-xs-5 principal_top_wrapper">
                                        <div class="principal_color"></div>
                                        <div class="principal_label">本金</div>
                                    </div>
                                    <div class="col-md-12 col-xs-7 principal_bottom_wrapper">
                                        <span class="principal_unit">HK$</span>
                                        <span class="principal_amount">0</span>
                                    </div>
                                </div>
                                <div class="row interest_section">
                                    <div class="col-md-12 col-xs-5 interest_top_wrapper">
                                        <div class="interest_color"></div>
                                        <div class="interest_label">利息</div>
                                    </div>
                                    <div class="col-md-12 col-xs-7 interest_bottom_wrapper">
                                        <span class="interest_unit">HK$</span>
                                        <span class="interest_amount">0</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 applyWrapper">

                                        <a class="applyNow"
                                            href="https://www.uaf.com.hk/tc/loans/imoney-loan/apply">立即申請</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
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