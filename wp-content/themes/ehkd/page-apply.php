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

                <h1 class="banner-title mt-5 ">貸款計算機</h1>



            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/assets/images/apply-now-banner.jpg" alt="">
</div>

<div class="container mt-5">



    <div class="blue-title text-center">



        申請流程





    </div>

    <img class="apply-flow-img w-100 mt-5"
        src="<?php echo get_template_directory_uri();?>/assets/images/apply-flow-img.png" alt="">

</div>

<div class="purple-gradient-div mt-5 pt-5 pb-5">


    <div id="apply-form">


        <div class="container">fdsfs</div>

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

<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/bootstrap-slider.min.js">
</script>
<script type="text/javascript" src="<?php echo get_template_directory_uri();?>/assets/js/hammer.min.js"></script>

<script>
$(function() {

    $("#cal").addClass("calPage");

    var result = {
        principal: 0,
        interest_rate: 0,
        period: 0
    };

    var currentPercentage = 0;

    $('.c100').addClass('p' + currentPercentage);

    $('#ex1').slider({
        formatter: function(value) {
            result.principal = value;
            $('.calc_loanAmount').val(addCommas(result.principal));
            doCalc(result);
        }
    });

    $('#ex2').slider({
        formatter: function(value) {
            result.interest_rate = value;
            $('.calc_monthlyInterestRate').val(value);
            doCalc(result);
        }
    });

    $('#ex3').slider({
        formatter: function(value) {
            result.period = value;
            $('.calc_repaymentPeriod').val(value);
            doCalc(result);
        }
    });

    // $('#ex1').slider().on('slide click', function(event){
    //     result.principal = event.value;
    //     $('.calc_loanAmount').text(result.principal.toLocaleString('en-us'));
    //     doCalc(result);
    // });

    // $('#ex2').slider().on('slide click', function(event){
    //     result.interest_rate = event.value;
    //     $('.calc_monthlyInterestRate').text(event.value);
    //     doCalc(result);
    // });

    // $('#ex3').slider().on('slide click', function(event){
    //     result.period = event.value;
    //     $('.calc_repaymentPeriod').text(event.value);
    //     doCalc(result);
    // });
    $('.calc_loanAmount').on('blur', function(e) {

        var $this = $(this);
        var input = $this.val();

        var input = input.replace(/[\D\s\._\-]+/g, "");

        input = input ? parseInt(input, 10) : 0;

        $this.val(function() {
            // return ( input === 0 ) ? "" : input.toLocaleString( "en-US" );
            return (input === 0) ? "" : addCommas(input);
        });

        $("#ex1").slider('setValue', input, true);
    });

    $('.calc_monthlyInterestRate').on('blur', function() {

        var $this = $(this);
        var input = $this.val();

        if (input.indexOf('.') == input.length - 1)
            return false;

        $("#ex2").slider('setValue', input, true);

    });

    $('.calc_repaymentPeriod').on('blur', function() {

        var $this = $(this);
        var input = $this.val();

        $("#ex3").slider('setValue', input, true);
    });

    function doCalc(result) {

        if (result.principal == 0 || result.period == 0) {
            $('.monthlyRepaymentWrapper .amount').text(addCommas(Math.round(0)));
            return false;
        }

        var interestRate = (result.interest_rate > 0 ? result.interest_rate / 100 : 1);

        // console.log(result.interest_rate > 0, interestRate);

        var monthlyRepayment = (result.principal * interestRate) / (1 - (1 / Math.pow(1 + interestRate,
            result.period)));
        if (interestRate === 1) {
            monthlyRepayment = result.principal / result.period;
        }
        var interest = monthlyRepayment * result.period - result.principal;

        var fullPayment = result.principal + interest;

        // Display Result
        $('.calc_loanAmount, .principal_amount').text(addCommas(result.principal));
        $('.monthlyRepaymentWrapper .amount').text(addCommas(Math.round(monthlyRepayment)));
        $('.circle_value').text('HK$' + addCommas(Math.round(fullPayment)));
        $('.interest_bottom_wrapper .interest_amount').text(addCommas(Math.round(interest)));

        // Create Circle
        $('.c100').removeClass('p' + currentPercentage);

        currentPercentage = Math.round(result.principal / (result.principal + interest) * 100);
        $('.c100').addClass('p' + currentPercentage);

    }

    function addCommas(nStr) {
        nStr += '';
        var x = nStr.split('.');
        var x1 = x[0];
        var x2 = x.length > 1 ? '.' + x[1] : '';
        var rgx = /(\d+)(\d{3})/;
        while (rgx.test(x1)) {
            x1 = x1.replace(rgx, '$1' + ',' + '$2');
        }
        return x1 + x2;
    }

});
</script>



<?php
get_footer();