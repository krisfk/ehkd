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

        <?php
$img_id = get_field('banner');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>
        <div class="inner-msg-div-outer">
            <div class="inner-msg-div container">

                <div class="inner-msg-div-inner-div">

                    <img class="home-banner-innner-img"
                        src="<?php echo get_template_directory_uri();?>/assets/images/home-banner-innner-img.png"
                        alt="">

                    <div class="mt-5 text-center"> <a href="javascript:void(0);" class="apply-now-btn">立即申請</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <img src="<?php echo $img_src;?>" alt="">
</div>


<?php 

// echo get_field('content_1');?>

<div class="container mt-5 pe-5 ps-5">


    <div class="row">

        <?php
$img_id = get_field('icon_1');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>
        <div class="col-6 col-sm-6 col-md-6 col-lg-3"> <img class="large-point-icon" src="<?php echo $img_src; ?>"
                alt="">
            <div class="text-center large-point-txt"><?php echo get_field('icon_1_txt');?>
            </div>
        </div>

        <?php
$img_id = get_field('icon_2');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3"><img class="large-point-icon" src="<?php echo $img_src; ?>"
                alt="">
            <div class="text-center large-point-txt"><?php echo get_field('icon_2_txt');?></div>
        </div>


        <?php
$img_id = get_field('icon_3');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3"><img class="large-point-icon" src="<?php echo $img_src; ?>"
                alt="">
            <div class="text-center large-point-txt"><?php echo get_field('icon_3_txt');?></div>
        </div>


        <?php
$img_id = get_field('icon_4');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

        <div class="col-6 col-sm-6 col-md-6 col-lg-3"><img class="large-point-icon" src="<?php echo $img_src; ?>"
                alt="">

            <div class="text-center large-point-txt"><?php echo get_field('icon_4_txt');?></div>
        </div>
    </div>

</div>



<div class="row mt-5 g-0">



    <?php
$img_id = get_field('bottom_img_1');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

    <a href="<?php echo get_field('bottom_img_1_link');?>" class="col-12 col-sd-6 col-md-6 col-lg-3 g-0">
        <img class="rect-img" src="<?php echo $img_src; ?>" alt="">
        <div class="rect-img-txt"><?php echo get_field('bottom_img_1_txt');?></div>
    </a>


    <?php
$img_id = get_field('bottom_img_2');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>


    <a href="<?php echo get_field('bottom_img_2_link');?>" class="col-12 col-sd-6 col-md-6 col-lg-3 g-0">
        <img class="rect-img" src="<?php echo $img_src; ?>" alt="">

        <div class="rect-img-txt"><?php echo get_field('bottom_img_2_txt');?></div>
    </a>


    <?php
$img_id = get_field('bottom_img_3');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

    <a href="<?php echo get_field('bottom_img_3_link');?>" class="col-12 col-sd-6 col-md-6 col-lg-3 g-0">
        <img class="rect-img" src="<?php echo $img_src; ?>" alt="">
        <div class="rect-img-txt"><?php echo get_field('bottom_img_3_txt');?></div>
    </a>


    <?php
$img_id = get_field('bottom_img_4');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

    <a href="<?php echo get_field('bottom_img_4_link');?>" class="col-12 col-sd-6 col-md-6 col-lg-3 g-0">
        <img class="rect-img" src="<?php echo $img_src; ?>" alt="">
        <div class="rect-img-txt"><?php echo get_field('bottom_img_4_txt');?></div>
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