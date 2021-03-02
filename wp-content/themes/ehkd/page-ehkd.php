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
    <!-- <img src="<?php echo get_template_directory_uri();?>/assets/images/page-ehkd-banner.jpg" alt=""> -->
    <?php
$img_id = get_field('banner');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

    <img src="<?php echo $img_src;?>" alt="">

</div>

<div class="container mt-5">

    <?php echo get_field('content_1');?>
    <!-- <img class="ehkd-img" src="<?php echo get_template_directory_uri();?>/assets/images/ehkd.png" alt=""> -->

    <div class="content-txt text-center mt-5">
        <?php echo get_field('content_2');?>

    </div>
    <div class="row mt-5">

        <?php
$img_id = get_field('icon_1');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>


        <div class="col-lg-3"> <img class="large-point-icon" src="<?php echo $img_src; ?>" alt="">
            <div class="text-center large-point-txt"><?php echo get_field('icon_1_txt');?>
            </div>

        </div>
        <?php
$img_id = get_field('icon_2');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

        <div class="col-lg-3"><img class="large-point-icon" src="<?php echo $img_src; ?>" alt="">
            <div class="text-center large-point-txt"> <?php echo get_field('icon_2_txt'); ?>
            </div>
        </div>
        <?php
$img_id = get_field('icon_3');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

        <div class="col-lg-3"><img class="large-point-icon" src="<?php echo $img_src; ?>" alt="">
            <div class="text-center large-point-txt"> <?php echo get_field('icon_3_txt'); ?>
            </div>
        </div>
        <?php
$img_id = get_field('icon_4');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

        <div class="col-lg-3"><img class="large-point-icon" src="<?php echo $img_src; ?>" alt="">

            <div class="text-center large-point-txt"> <?php echo get_field('icon_4_txt'); ?>
            </div>
        </div>
    </div>

</div>


<!-- <div class="container"> -->

<div class="light-blue-gradient-div mt-5">


    <div class="light-blue-inner-content text-center">

        <?php echo get_field('apply_requirement');?>
        <!-- <div class="bold-title">申請條件</div>

        <div class="txt">
            年滿18歲香港永久居民 <br>
            最近3個月入息證明<br>
            最近3個月的住址證明
        </div> -->

        <a class="apply-btn" href="#"> <?php echo get_field('apply_btn');?>
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