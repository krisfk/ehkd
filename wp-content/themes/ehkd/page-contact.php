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

                <h1 class="banner-title mt-5 ">聯絡我們</h1>



            </div>
        </div>
    </div>
    <img src="<?php echo get_template_directory_uri();?>/assets/images/contact-banner.jpg" alt="">
</div>

<div class="container mt-5 contact-form-container">


    <div class="row">


        <div class="col-lg-12">
            <table class="w-100 contact-form-container-heading ">
                <tr>
                    <td class="blue-title align-bottom w-50">香港數字資產信貸有限公司</td>
                    <td class=" align-bottom text-left w-50 "> <span class="blue-subtitle">放債人牌照號碼:</span>
                        <span>1688/2021</span>
                    </td>
                </tr>

            </table>


        </div>



    </div>
    <div class="row mt-4">
        <div class="col-lg-6">

            <span class="blue-subtitle"> 查詢熱線</span> <br>
            +852 2628 2828
        </div>
        <div class="col-lg-6 g-0">

            <span class="blue-subtitle"> 電郵</span> <br>
            info@ehkd.com



        </div>
    </div>

    <div class="row mt-4">



        <div class="col-lg-6">

            <span class="blue-subtitle"> WhatsApp</span> <br>
            xxxx-xxxx
        </div>
        <div class="col-lg-6 g-0">

            <span class="blue-subtitle"> 地址
            </span> <br>
            香港九龍彌敦道528號康佑大廈地下至二樓




        </div>

    </div>


    <div class="row mt-4">



        <div class="col-lg-6">

            <span class="blue-subtitle"> 傳真</span> <br>
            +852 2628 2828
        </div>
        <div class="col-lg-6 g-0">

            <span class="blue-subtitle"> 辦公時間

            </span> <br>

            9:00am - 5:00pm (星期一至五) <br>
            9:00am - 1:00pm (星期六)



        </div>

    </div>




</div>
</div>

<script src="https://maps.googleapis.com/maps/api/js?libraries=places&key=AIzaSyBcDNaL1X-ElylUXw8mb07ygWv7MXUYjJY">
</script>
<script src="<?php echo get_template_directory_uri();?>assets/js/gmaps.js"></script>



<div class="purple-gradient-div mt-5 pt-5 pb-5">


    <div id="map"></div>


</div>













<script>
/* Map Object */
// data-lat="22.279866" data-lon="114.184255"
//22.279880, 114.184367
var map = new GMaps({
    el: '#map',
    lat: 22.279866,
    lng: 114.184255
});

map.drawRoute({
    //22.2803747,114.1828534
    //22.279922,114.1820828
    //22.2798747,114.1841906
    //22.280554, 114.186001
    origin: [22.279880, 114.184255],
    destination: [22.280554, 114.186001],
    travelMode: 'walking',
    strokeColor: '#00F',
    strokeOpacity: 0.6,

    strokeWeight: 6,
    path: google.maps.SymbolPath.FORWARD_CLOSED_ARROW
});
</script>

<?php
get_footer();