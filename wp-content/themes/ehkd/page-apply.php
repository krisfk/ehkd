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



<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">

<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<div class="main-banner">

    <div class="home-main-banner-inner-div">


        <div class="inner-msg-div-outer">
            <div class="inner-msg-div container">

                <h1 class="banner-title mt-4 mt-sm-4 mt-md-4 mt-lg-5"><?php echo get_the_title();?></h1>



            </div>
        </div>
    </div>
    <?php
$img_id = get_field('banner');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

    <img src="<?php echo $img_src;?>" alt="">
    <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/apply-now-banner.jpg" alt=""> -->
</div>

<div class="container mt-5">



    <div class="blue-title text-center">




        <?php echo get_field('content_1');?>







    </div>

    <!-- <img class="apply-flow-img w-100 mt-5"
        src="<?php echo get_template_directory_uri();?>/assets/images/apply-flow-img.png" alt=""> -->
    <?php
$img_id = get_field('image_1');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

    <img class="apply-flow-img w-100 mt-5" src="<?php echo $img_src;?>" alt="">


</div>

<div class="purple-gradient-div mt-5 pt-5 pb-5">


    <div id="apply-form">


        <div class="container apply-form-container ">

            <div class="apply-form-title text-center"> <?php echo get_field('content_2');?>
            </div>

            <div class="content-txt white result-txt-div  text-center mt-5">
                <?php echo get_field('content_3');?>
            </div>

            <div class="mt-5 form-div">
                <?php echo get_field('content_4');?>



            </div>

        </div>

    </div>


</div>











<style type="text/css">
.form-error {
    display: none;
}
</style>



<script>
$(function() {
    $("#customer-dob").datepicker({
        dateFormat: 'yy/mm/dd'
    });

    $('.submit-btn').click(function(e) {
        e.preventDefault();
        var loan_type = $('#loan-type').val()
        var customer_name = $('#customer-name').val();
        var customer_tel = $('#customer-tel').val();
        var customer_id = $('#customer-id').val();
        var customer_id2 = $('#customer-id2').val();
        var customer_dob = $('#customer-dob').val();
        var where_from = $('#where-from').val();
        var agree = $('#agree').is(":checked");

        var customer_id_full = customer_id.toUpperCase() + '(' + customer_id2.toUpperCase() + ')';


        var valid = true;

        $('.form-error').fadeOut(0);
        if (!customer_name) {
            $('.name-error').fadeIn(0);
            valid = false;
        }

        if (!(/^[0-9]{8}$/.test(customer_tel))) {
            $('.tel-error').fadeIn(0);
            valid = false;

        }

        if (!customer_dob) {
            $('.dob-error').next('.form-error').fadeIn(0);
            valid = false;

        }

        var input_id = customer_id + '(' + customer_id2 + ')';
        if (!IsHKID(input_id)) {
            $('.hkid-error').fadeIn(0);
            valid = false;

        }

        if (!agree) {
            $('.agree-error').fadeIn(0);
            valid = false;

        }


        if (valid) {


            $.ajax({
                type: "POST",
                url: '<?php echo get_site_url();?>/wp-json/api/apply',
                data: {
                    loan_type: loan_type,
                    customer_name: customer_name,
                    customer_tel: customer_tel,
                    customer_id_full: customer_id_full,
                    customer_dob: customer_dob,
                    where_from: where_from,
                    agree: agree
                },
                dataType: "json",
            }).done(function(response) {

                if (response.status) {

                    $('.form-div').fadeOut(0);
                    $('.result-txt-div').html('您的申請已發送，我們會盡快再聯絡您，謝謝。');

                }

            }).fail(function(Response) {});



        }

    })
});

function IsHKID(str) {
    var strValidChars = "ABCDEFGHIJKLMNOPQRSTUVWXYZ"

    // basic check length
    if (str.length < 8)
        return false;

    // handling bracket
    if (str.charAt(str.length - 3) == '(' && str.charAt(str.length - 1) == ')')
        str = str.substring(0, str.length - 3) + str.charAt(str.length - 2);

    // convert to upper case
    str = str.toUpperCase();

    // regular expression to check pattern and split
    var hkidPat = /^([AZ]{1,2})([0-9]{6})([A0-9])$/;
    var matchArray = str.match(hkidPat);

    // not match, return false
    if (matchArray == null)
        return false;

    // the character part, numeric part and check digit part
    var charPart = matchArray[1];
    var numPart = matchArray[2];
    var checkDigit = matchArray[3];

    // calculate the checksum for character part
    var checkSum = 0;
    if (charPart.length == 2) {
        checkSum += 9 * (10 + strValidChars.indexOf(charPart.charAt(0)));
        checkSum += 8 * (10 + strValidChars.indexOf(charPart.charAt(1)));
    } else {
        checkSum += 9 * 36;
        checkSum += 8 * (10 + strValidChars.indexOf(charPart));
    }

    // calculate the checksum for numeric part
    for (var i = 0, j = 7; i < numPart.length; i++, j--)
        checkSum += j * numPart.charAt(i);

    // verify the check digit
    var remaining = checkSum % 11;
    var verify = remaining == 0 ? 0 : 11 - remaining;

    return verify == checkDigit || (verify == 10 && checkDigit == 'A');
}
</script>

<?php
get_footer();