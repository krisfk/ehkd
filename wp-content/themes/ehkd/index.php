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
        </ul>

        <div class="lang-div">
            <a href="">繁</a>/
            <a href="">簡</a>/

            <a href="">ENGLISH</a>

        </div>
    </div>


</div>
<?php
get_footer();