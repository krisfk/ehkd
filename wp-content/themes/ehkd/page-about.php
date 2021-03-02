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

                <h1 class="banner-title mt-5"><?php echo get_the_title();?></h1>



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


    <div class="row">

        <div class="col-lg-6">

            <?php
$img_id = get_field('image_1');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

            <img class="w-100" src="<?php echo $img_src;?>" alt="">
        </div>
        <div class="col-lg-6">
            <!-- <div class="blue-title">
                香港數字資產信貸有限公司</div>
            <div class="content-txt mt-3 text-justify">
                為香港數字資產交易所集團成員，香港持牌信貸機構。作為創新型的信貸機構，公司依托香港數字資產交易所（HKD.com）强大的技術及資金支持，與時俱進，結合金融科技，迎合數字資產熱潮，率先推出多個與數字資產相關的信貸產品，以滿足客戶與日俱增的財務需要。
            </div> -->
            <?php echo get_field('content_1');?>


        </div>

    </div>

</div>


<!-- <div class="container"> -->

<div class="row mt-5 g-0">

    <div class="col-12 five-points-top-div"> <?php echo get_field('content_2');?>
    </div>

    <?php
$img_id = get_field('bottom_img_1');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

    <a href="#" class="col g-0">
        <img class="rect-img" src="<?php echo $img_src;?>" alt="">
        <div class="rect-img-txt"><?php echo get_field('bottom_img_1_txt');?></div>
    </a>

    <?php
$img_id = get_field('bottom_img_2');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

    <a href="#" class="col g-0">
        <img class="rect-img" src="<?php echo $img_src;?>" alt="">
        <div class="rect-img-txt"><?php echo get_field('bottom_img_2_txt');?></div>
    </a>

    <?php
$img_id = get_field('bottom_img_3');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>
    <a href="#" class="col g-0">
        <img class="rect-img" src="<?php echo $img_src;?>" alt="">

        <div class="rect-img-txt"><?php echo get_field('bottom_img_3_txt');?></div>
    </a>

    <?php
$img_id = get_field('bottom_img_4');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>
    <a href="#" class="col g-0">
        <img class="rect-img" src="<?php echo $img_src;?>" alt="">
        <div class="rect-img-txt"><?php echo get_field('bottom_img_4_txt');?></div>
    </a>

    <?php
$img_id = get_field('bottom_img_5');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>
    <a href="#" class="col g-0">
        <img class="rect-img" src="<?php echo $img_src;?>" alt="">
        <div class="rect-img-txt"><?php echo get_field('bottom_img_5_txt');?></div>
    </a>

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