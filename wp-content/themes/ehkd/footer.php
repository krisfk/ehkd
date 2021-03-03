<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */

?>

<?php 

// if ( $post = get_page_by_path( 'footer', OBJECT, 'page' ) )
//     $pid = $post->ID;
// else
//     $pid = 0;
 
    $page = get_page_by_path('footer');
    //$page = get_page(icl_object_id($page->ID, 'page', true, 'cn'));
   // echo $page->ID;
 
    if ( defined( 'ICL_LANGUAGE_CODE' ) ) {
        $lang_code =  ICL_LANGUAGE_CODE;
    }
    $page = get_page(icl_object_id($page->ID, 'page', true, $lang_code));
    $pid=$page->ID;
   

 ?>

<?php //echo $pid;  ?>

<div class="container">

    <div class="row">

        <div class="col-lg-12 col-xl-4">

            <div class="footer-lightblue-title mt-5"><?php echo get_field('content_1',$pid);?></div>

            <div class="footer-apply-btn-above-txt mt-3"><?php echo get_field('content_2',$pid);?></div>

            <a href="#" class="footer-apply-btn mt-4"><?php echo get_field('apply_btn',$pid);?></a>
        </div>
        <div class="col-lg-12 col-xl-8">


            <div class=" footer-sitemap mt-5">
                <div class="footer-sitemap-branch">

                    <?php echo get_field('footer_sitemap_branch_1',$pid);?>




                </div>
                <div class="footer-sitemap-branch">

                    <?php echo get_field('footer_sitemap_branch_2',$pid);?>





                </div>
                <div class="footer-sitemap-branch">

                    <?php echo get_field('footer_sitemap_branch_3',$pid);?>

                </div>
                <div class="footer-sitemap-branch">
                    <?php echo get_field('footer_sitemap_branch_4',$pid);?>







                </div>


                <div class="text-start mt-4">


                    <div class="d-inline-block me-4 ">

                        <span class="footer-phone footer-phone-1"> <?php echo get_field('phone_number',$pid);?></span>

                        <div class="footer-under-phone-txt"><?php echo get_field('content_3',$pid);?></div>


                    </div>
                    <div class="d-inline-block">

                        <span class="footer-phone footer-phone-2">
                            <?php echo get_field('whatsapp_number',$pid);?></span>
                        <div class="footer-under-phone-txt"><?php echo get_field('content_4',$pid);?></div>

                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

</div>

</main><!-- #main -->
</div><!-- #primary -->


<div class="copyright-div mt-3 text-center pb-5 pt-3 mt-5">Copyright &copy; Hong Kong Digital Asset Credit Limited All
    Rights
    Reserved.
</div>

</div><!-- #content -->


<?php //get_template_part( 'template-parts/footer/footer-widgets' ); ?>

<footer id="colophon" class="site-footer" role="contentinfo">

</footer><!-- #colophon -->

</div><!-- #page -->

<?php wp_footer(); ?>

</body>

</html>