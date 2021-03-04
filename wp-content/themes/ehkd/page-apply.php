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
                                <option value="ehkd">易用錢</option>
                                <option value="property-owner-personal-loan">業主私人貸款</option>
                                <option value="special-personal-loan-program-for-civil-servant">公務員低息貸款</option>
                                <option value="mortgage-loan">物業貸款</option>
                                <option value="digital-currency-mortgage">數字貨幣抵押貸款</option>
                            </select></div>
                    </div>
                    <div class="row mt-5 mx-auto">
                        <div class="col-lg-6"><label for="customer-name">姓名*: </label><input id="customer-name"
                                class="form-text" type="text" placeholder="姓名*" />
                            <div class="form-error text-danger mt-2">此欄必須填寫</div>
                        </div>
                        <div class="col-lg-6 mt-5 mt-sm-5 mt-md-5 mt-lg-0"><label for="customer-tel">聯絡電話*:
                            </label><input id="customer-tel" class="form-text" type="text" placeholder="聯絡電話*" />
                            <div class="form-error text-danger mt-2">此欄必須填寫</div>
                        </div>
                    </div>
                    <div class="row mt-5 mx-auto">
                        <div class="col-lg-6"><label for="customer-id">身份証號碼*: 例如 - A123456(7) </label><input
                                id="customer-id" class="form-text w-50" type="text" /> <span class="p-2">(</span> <input
                                type="text" class="form-text " id="customer-id2" maxlength="1" /><span
                                class="p-2">)</span>
                            <div class="form-error text-danger mt-2">此欄必須填寫</div>
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
                                <option value="facebook">Facebook</option>
                                <option value="google">Google</option>
                                <option value="outdoor-advertising">戶外廣告</option>
                                <option value="friend-referral">朋友介紹</option>
                                <option value="other">其他</option>
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

    })
});
</script>

<?php
get_footer();