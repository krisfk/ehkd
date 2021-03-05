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
        <!-- 免估價 免抵押 免手續費 <br>
        <span class="big">最高20萬</span> 即日批核 -->
        <?php echo get_field('content_1');?>

    </div>

    <div class="content-txt text-center mt-5">

        <!-- 只要你是居屋或公屋業主，毋須抵押物業，都可申請特大額私人貸款，助你抓住時代機遇， <br>
        有效善用資金作投資、翻新家居或其他生活所需，靈活理財，解決燃眉之急。 -->
        <?php echo get_field('content_2');?>

    </div>

    <div class="container mt-5">


        <div class="d-table">

            <!-- <div class="col-lg-6"> -->

            <div class="d-table-cell w-50">


                <?php
$img_id = get_field('image_1');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

                <img class="w-100" src="<?php echo $img_src;?>" alt="">
                <!-- </div> -->
                <!-- <div class="col-lg-6"> -->

            </div>
            <div class="d-table-cell w-50 align-middle">
                <!-- <ul class=" big-point-ul">
                    <li> 大額貸款</li>
                    <li>毋須抵押物業</li>
                    <li> 特長周轉期</li>



                </ul> -->

                <?php echo get_field('content_3');?>



            </div>

            <!-- </div> -->

        </div>

    </div>



</div>


<!-- <div class="container"> -->

<div class="light-blue-gradient-div mt-5">


    <div class="light-blue-inner-content text-center">

        <!-- <div class="bold-title">申請條件</div>

        <div class="txt">
            公屋/居屋業主 <br>
            年滿18歲香港永久居民<br>
            最近3個月入息證明<br>
            最近3個月的住址證明
        </div> -->

        <?php echo get_field('apply_requirement');?>


        <a class="apply-btn" href="../apply#2"> <?php echo get_field('apply_btn');?>
        </a>


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