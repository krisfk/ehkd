<?php


$clientIP = '0.0.0.0';

if (isset($_SERVER['HTTP_CLIENT_IP'])) {
$clientIP = $_SERVER['HTTP_CLIENT_IP'];
} elseif (isset($_SERVER['HTTP_CF_CONNECTING_IP'])) {
# when behind cloudflare
$clientIP = $_SERVER['HTTP_CF_CONNECTING_IP']; 
} elseif (isset($_SERVER['HTTP_X_FORWARDED_FOR'])) {
$clientIP = $_SERVER['HTTP_X_FORWARDED_FOR'];
} elseif (isset($_SERVER['HTTP_X_FORWARDED'])) {
$clientIP = $_SERVER['HTTP_X_FORWARDED'];
} elseif (isset($_SERVER['HTTP_FORWARDED_FOR'])) {
$clientIP = $_SERVER['HTTP_FORWARDED_FOR'];
} elseif (isset($_SERVER['HTTP_FORWARDED'])) {
$clientIP = $_SERVER['HTTP_FORWARDED'];
} elseif (isset($_SERVER['REMOTE_ADDR'])) {
$clientIP = $_SERVER['REMOTE_ADDR'];
}
echo get_the_date('Y');
echo get_the_date('m');
echo get_the_date('d');
// $today = get_the_date('Y');

// echo $today;
// echo $today['year'];
// echo $today['mon'];
// echo $today['mday'];
echo $clientIP;

$args = array(
	'post_type'         => 'application',
	'post_status'       => 'publish',
	'meta_key'		=> 'customer_ip',
	'meta_value'	=> $clientIP,
	'date_query'        => array(
		array(
			'year'  => get_the_date('Y'),
			'month' => get_the_date('m'),
			'day'   => get_the_date('d')
		)
	)
);
$my_query = new WP_Query($args);

if ( $my_query->have_posts() ) {
	echo 999;
}

?>