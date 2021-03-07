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

<scrip src="https://code.jquery.com/ui/1.12.1/jquery-ui.js">
    </script>



    <div class="main-banner">

        <div class="home-main-banner-inner-div">


            <div class="inner-msg-div-outer">
                <div class="inner-msg-div container">

                    <h1 class="banner-title mt-5 "><?php echo get_the_title();?></h1>



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

    <?php echo get_field('contact_content');?>



    </div>




    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBN611NFShALGyApUBivJPfvqlEIvbPRNU&callback=initMap&libraries=&v=weekly"
        async>
    </script>

    <script type="text/javascript">
    function initMap() {
        const myLatLng = {
            lat: 22.31321892272788,
            lng: 114.17080511239944
        };
        const map = new google.maps.Map(document.getElementById("map"), {
            // zoom: 4,
            center: myLatLng,
            gestureHandling: 'greedy',
            zoomControl: false,
            scaleControl: false,
            scrollwheel: false,
            disableDoubleClickZoom: true,
            mapTypeControl: false,
            streetViewControl: false

        });

        // const marker =
        //     new google.maps.Marker({
        //         position: myLatLng,
        //         map,
        //         title: "Hello World!",
        //     });

        var marker2 = new google.maps.Marker({
            position: myLatLng,
            map: map,
            icon: '<?php echo get_template_directory_uri();?>/assets/images/ehkd-marker-svg.svg'
        });


        map.setZoom(19);
        map.panTo(marker2.position);


        // const contentString = '<div class="infowindow">fdsaf</div>';


        // const infowindow = new google.maps.InfoWindow({
        //     content: contentString,
        // });

        // marker.addListener("click", () => {
        //     infowindow.open(map, marker);
        // });


    }
    </script>

    <div class="purple-gradient-div mt-5 pt-5 pb-5">


        <div id="map"></div>


    </div>











    <?php
get_footer();