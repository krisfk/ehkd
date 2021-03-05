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

                <h1 class="banner-title mt-4 mt-sm-4 mt-md-4 mt-lg-5 blue"><?php echo get_the_title();?></h1>



            </div>
        </div>
    </div>
    <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/loancal-banner.jpg" alt=""> -->
    <?php
$img_id = get_field('banner');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

    <img src="<?php echo $img_src;?>" alt="">
</div>

<div class="container mt-5">



    <div class="blue-title text-center">



        <?php echo get_field('content_1');?>






    </div>

</div>

<div class="purple-gradient-div mt-5 pt-5 pb-5">


    <div id="calculator">

        <img class="cal-img" src="<?php echo get_template_directory_uri();?>/assets/images/cal-img.png" alt="">
        <div class="main container">
            <div class="mainImgWrapper row">
                <div class="col-xs-12 col-md-6 input">
                    <div class="row">
                        <div class="col-md-6 col-xs-5 calc_label"><?php echo get_field('cal_txt_1');?></div>
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
                        <div class="col-md-6 col-xs-5 calc_label"><?php echo get_field('cal_txt_1');?></div>
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
                        <div class="col-md-6 col-xs-5 calc_label"><?php echo get_field('cal_txt_3');?></div>
                        <div class="col-md-6 col-xs-7 calc_value_wrapper">
                            <div class="calc_value">
                                <input class="calc_repaymentPeriod" type="text" value="0" placeholder="0"
                                    tabindex="3"><span class="calc_unit"><?php echo get_field('cal_txt_4');?></span>
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
                                <div class="title"><?php echo get_field('cal_txt_5');?></div>
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
                                        <span class="circle_title"><?php echo get_field('cal_txt_6');?></span>
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
                                        <div class="principal_label"><?php echo get_field('cal_txt_7');?></div>
                                    </div>
                                    <div class="col-md-12 col-xs-7 principal_bottom_wrapper">
                                        <span class="principal_unit">HK$</span>
                                        <span class="principal_amount">0</span>
                                    </div>
                                </div>
                                <div class="row interest_section">
                                    <div class="col-md-12 col-xs-5 interest_top_wrapper">
                                        <div class="interest_color"></div>
                                        <div class="interest_label"><?php echo get_field('cal_txt_8');?></div>
                                    </div>
                                    <div class="col-md-12 col-xs-7 interest_bottom_wrapper">
                                        <span class="interest_unit">HK$</span>
                                        <span class="interest_amount">0</span>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-12 col-xs-12 applyWrapper">

                                        <a class="applyNow" href="./apply"><?php echo get_field('cal_txt_9');?></a>
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