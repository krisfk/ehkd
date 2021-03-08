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



<div class="main-banner"></div>

<div class="container mt-5">



    <div class="blue-title text-center">


        <span class="big"><?php echo get_the_title();?></span>

    </div>

    <div class="terms-content-txt   text-left">

        <?php echo get_the_content();?>

    </div>

    <div class="row mt-5">
        <?php
$img_id = get_field('icon_1');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>



        <div class="col-lg-4"><img class="large-point-icon" src="<?php echo $img_src;?>" alt="">
            <div class="text-center large-point-txt">
                <?php echo get_field('icon_1_txt');?>
            </div>
        </div>
        <?php
$img_id = get_field('icon_2');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

        <div class="col-lg-4"><img class="large-point-icon" src="<?php echo $img_src;?>" alt="">
            <div class="text-center large-point-txt">
                <?php echo get_field('icon_2_txt');?>

            </div>
        </div>
        <?php
$img_id = get_field('icon_3');
$img_arr = wp_get_attachment_image_src($img_id,'full');
$img_src=$img_arr[0];
?>

        <div class="col-lg-4"><img class="large-point-icon" src="<?php echo $img_src;?>" alt="">

            <div class="text-center large-point-txt">

                <?php echo get_field('icon_3_txt');?>

            </div>
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