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
                <?php echo get_field('content_4');?>



            </div>

        </div>

    </div>


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