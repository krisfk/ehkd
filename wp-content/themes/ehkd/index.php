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



<div class="container">


    <div class="top-div">
        <a href="javascript:void(0);" class="ehkd-logo-a"><img class="ehkd-logo"
                src="<?php echo get_template_directory_uri();?>/assets/images/ehkd-logo.png" alt=""></a>

        <ul class="top-menu">
            <li><a href="javascript:void(0);">關於我們</a>
            </li>
            <li><a href="javascript:void(0);">貸款產品</a>
            </li>
            <li><a href="javascript:void(0);">貸款計數機</a>
            </li>
            <li><a href="javascript:void(0);">立即申請</a>
            </li>
            <li><a href="javascript:void(0);">聯絡我們</a>
            </li>

            <li>

                <div class="lang-div">
                    <a href="javascript:void(0);">繁</a>/
                    <a href="javascript:void(0);">簡</a>/
                    <a href="javascript:void(0);">ENGLISH</a>

                </div>
            </li>
        </ul>


    </div>
</div>
<div class="main-banner">

    <div class="home-main-banner-inner-div">


        <div class="inner-msg-div-outer">
            <div class="inner-msg-div container">

                <div class="inner-msg-div-inner-div">

                    <img class="home-banner-innner-img"
                        src="<?php echo get_template_directory_uri();?>/assets/images/home-banner-innner-img.png"
                        alt="">

                    <div> <a href="javascript:void(0);" class="apply-now-btn">立即申請</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/assets/images/home-banner.jpg" alt="">
</div>



<script type="text/javascript">
$(function() {

    // $(window).load(function() {

    // })
})

window.onload = function() {
    $('.inner-msg-div-inner-div').height($('.inner-msg-div-outer').height());
}
</script>


<?php
get_footer();