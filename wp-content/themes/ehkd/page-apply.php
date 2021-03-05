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

            <div class="content-txt white  text-center mt-5">
                <?php echo get_field('content_3');?>
            </div>

            <div class="mt-5">
                <?php //echo get_field('content_4');?>

                <div class="row">
                    <div class="row mx-auto">
                        <div class="col-lg-12 "><label for="loan-type">貸款類型: </label><select id="loan-type"
                                class="form-select" name="loan-type">
                                <option value="">--請選擇--</option>
                                <option value="易用錢">易用錢</option>
                                <option value="業主私人貸款">業主私人貸款</option>
                                <option value="公務員低息貸款">公務員低息貸款</option>
                                <option value="物業貸款">物業貸款</option>
                                <option value="數字貨幣抵押貸款">數字貨幣抵押貸款</option>
                            </select></div>
                    </div>
                    <div class="row mt-5 mx-auto">
                        <div class="col-lg-6"><label for="customer-name">姓名*: </label><input id="customer-name"
                                class="form-text" type="text" placeholder="姓名*" />
                            <div class="form-error text-danger mt-2">此欄必須填寫</div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-sm-5 mt-md-5 mt-lg-0"><label for="customer-tel">聯絡電話*:
                            </label><input id="customer-tel" maxlength="8" class="form-text" type="text"
                                placeholder="聯絡電話*" />
                            <div class="form-error text-danger mt-2">電話格式不正確</div>
                        </div>
                    </div>
                    <div class="row mt-5 mx-auto">
                        <div class="col-lg-6"><label for="customer-id">身份証號碼*: 例如 - A123456(7) </label><input
                                id="customer-id" maxlength="7" class="form-text w-50" type="text" /> <span
                                class="p-2">(</span> <input type="text" class="form-text " id="customer-id2"
                                maxlength="1" /><span class="p-2">)</span>
                            <div class="hkid-error form-error text-danger mt-2">身份証號碼格式不正確</div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-sm-5 mt-md-5 mt-lg-0"><label for="customer-dob">出生日期*:
                            </label><input id="customer-dob" class="form-text " type="text" placeholder="年/月/日" />
                            <div class="form-error text-danger mt-2">此欄必須填寫</div>
                        </div>
                    </div>
                    <div class="row mt-5 mx-auto">
                        <div class="col-lg-12 "><label for="where-from">從哪裡知道我們: </label><select id="loan-type"
                                class="form-select" name="where-from">
                                <option value="">--請選擇--</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Google">Google</option>
                                <option value="戶外廣告">戶外廣告</option>
                                <option value="朋友介紹">朋友介紹</option>
                                <option value="其他">其他</option>
                            </select></div>
                    </div>
                    <div class="row mt-5 mx-auto">
                        <div class="col-lg-12">
                            <div class="terms-txt">
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="align-top pe-3"><input class="form-checkbox" type="checkbox"
                                                    id="agree" /></td>
                                            <td><label for="agree"
                                                    id="agree-label">*本人已詳細閱讀及明白下列的免責聲明及私隱政策，並同意授權貴公司向任何第三方人士索取有關本人的資料，包括但不限於向信貸資料服務機構/環聯資訊有限公司索取本人之信貸報告，用作是次及日後審核或覆核用途。*必須填寫</label>

                                                <div class="agree-error form-error text-danger mt-2">必須同意免責聲明及私隱政策</div>

                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="row mt-5">
                        <div class="col text-center"><a class="submit-btn" href="#">提交</a></div>
                    </div>
                </div>

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
            $('#customer-name').next('.form-error').fadeIn(0);
            valid = false;
        }

        if (!(/^[0-9]{8}$/.test(customer_tel))) {
            $('#customer-tel').next('.form-error').fadeIn(0);
            valid = false;

        }

        if (!customer_dob) {
            $('#customer-dob').next('.form-error').fadeIn(0);
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
                success: function(response) {
                    console.log(111);
                    //
                },
                // dataType: dataType
            });


            // var loan_type = $('#loan-type').val()
            // var customer_name = $('#customer-name').val();
            // var customer_tel = $('#customer-tel').val();
            // var customer_id = $('#customer-id').val();
            // var customer_id2 = $('#customer-id2').val();
            // var customer_dob = $('#customer-dob').val();
            // var where_from = $('#where-from').val();
            // var agree = $('#agree').is(":checked");

            // var customer_id_full = customer_id.toUpperCase() + '(' + customer_id2.toUpperCase() + ')';

            // console.log(customer_id_full);

        }


        // String regEx = "^[0-9]{8}$";



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