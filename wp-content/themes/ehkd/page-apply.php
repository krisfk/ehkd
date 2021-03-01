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


        <div class="container apply-form-container ">

            <div class="apply-form-title text-center">申請表格 </div>

            <div class="content-txt white  text-center mt-5">填寫以下簡單申請表格, 我們將有貸款顧問以電話或Whatsapp形式與您聯絡。 <br>
                最快30分鐘初步批核，再後補交文件，快速便捷，且私隱度極高。</div>

            <div class="mt-5">
                <div class="row">

                    <div class="row">
                        <div class="col-lg-12 ">
                            <label for="loan-type">貸款類型: </label>

                            <select name="loan-type" id="loan-type" class="form-select">
                                <option value="ehkd">易用錢</option>
                                <option value="property-owner-personal-loan">業主私人貸款</option>
                                <option value="special-personal-loan-program-for-civil-servant">公務員低息貸款</option>
                                <option value="mortgage-loan">物業貸款</option>
                                <option value="digital-currency-mortgage">數字貨幣抵押貸款</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-6">

                            <label for="customer-name">姓名*: </label>
                            <input placeholder="姓名*" class="form-text" type="text" id="customer-name">

                        </div>
                        <div class="col-lg-6">

                            <label for="customer-tel">聯絡電話*: </label>
                            <input placeholder="聯絡電話*" class="form-text" type="text" id="customer-tel">

                        </div>
                    </div>

                    <div class="row mt-5">

                        <div class="col-lg-6">

                            <label for="customer-id">身份証號碼*: </label>
                            <input placeholder="例如：A123456(7)" class="form-text" type="text" id="customer-id">

                        </div>
                        <div class="col-lg-6">

                            <label for="customer-dob">出生日期*: </label>
                            <input placeholder="年/月/日" class="form-text" type="text" id="customer-dob">


                        </div>
                    </div>

                    <div class="row mt-5">
                        <div class="col-lg-12  ">
                            <label for="where-from">從哪裡知道我們: </label>

                            <select name="where-from" id="loan-type" class="form-select">
                                <option value="ehkd">易用錢</option>
                                <option value="property-owner-personal-loan">業主私人貸款</option>
                                <option value="special-personal-loan-program-for-civil-servant">公務員低息貸款</option>
                                <option value="mortgage-loan">物業貸款</option>
                                <option value="digital-currency-mortgage">數字貨幣抵押貸款</option>
                            </select>
                        </div>
                    </div>

                    <div class="row mt-5">

                        <div class="col-lg-12">


                            <div class="terms-txt">

                                <table>
                                    <tr>
                                        <td class="align-top pe-3"> <input type="checkbox" class="form-checkbox">
                                        </td>
                                        <td> *本人已詳細閱讀及明白下列的免責聲明及私隱政策，並同意授權貴公司向任何第三方人士索取有關本人的資料，包括但不限於向信貸資料服務機構/環聯資訊有限公司索取本人之信貸報告，用作是次及日後審核或覆核用途。
                                            <br>
                                            *必須填寫
                                        </td>
                                    </tr>
                                </table>

                            </div>

                        </div>
                    </div>

                    <div class="row mt-5">

                        <div class="col text-center">

                            <a href="#" class="submit-btn">提交</a>
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


<script>
$(function() {
    $("#customer-dob").datepicker({
        dateFormat: 'yy/mm/dd'
    });
});
</script>

<?php
get_footer();