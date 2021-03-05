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
</div>

<div class="container mt-5">



    <div class="blue-title text-center">

        <!-- 

        一按、二按物業按揭 <br>
        貸款額可 <span class="big"> 高達樓價9成</span>
 -->

        <?php echo get_field('content_1');?>



    </div>

    <div class="content-txt text-center mt-5">


        <!-- 
        我們提供多元化物業加按服務，任何物業，不限樓齡，免入息快速批核， <br>
        貸款額不設上限，助你輕鬆將物業套現為流動資金。 -->
        <?php echo get_field('content_2');?>

    </div>

    <div class="container">


        <?php
$img_id = get_field('image_1');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

        <img class="w-100" src="<?php echo $img_src;?>" alt="">

        <!-- <img class="w-100"
            src="<?php echo get_template_directory_uri();?>/assets/images/mortgage-loan-img.jpg" alt=""> -->
    </div>

    <div class="big-light-blue text-center mt-5">

        <?php echo get_field('content_3');?>

    </div>



</div>


<!-- <div class="container"> -->

<div class="light-blue-gradient-div mt-5">


    <!-- <div class="light-blue-inner-content text-center">

        <div class="bold-title">申請條件</div>

        <div class="txt">
            HKD.com注冊用戶 <br>
            年滿18歲香港永久居民 <br>
            最近3個月入息證明 <br>
            最近3個月的住址證明
        </div>

        <a class="apply-btn" href="#">立即申請</a>


    </div> -->

    <div class="mortgage-loan-light-blue-inner-div content-txt">
        <!-- <div class="blue-title text-center">申請流程</div>

        <div class="text-center mt-3">你只需完成簡單申請表格，我們即時有專人為你跟進網上申請，我們會以電話或Whatsapp <br>
            與你聯絡，最快15分鐘初步批核再後補交文件，過程私隱度極高。
        </div> -->

        <?php echo get_field('apply_requirement');?>

        <div class="text-center mt-3">
            <a class="apply-btn" href="../apply#4"> <?php echo get_field('apply_btn');?>
            </a>
        </div>

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