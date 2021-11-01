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

$today = getdate();
echo $today['year'];
echo $today['mon'];
echo $today['mday'];
echo $clientIP;

$args = array(
	'post_type'         => 'application',
	'post_status'       => 'publish',
	'meta_key'		=> 'customer_ip',
	'meta_value'	=> $clientIP,
	'date_query'        => array(
		array(
			'year'  =>2021, //$today['year'],
			'month' =>11, //$today['mon'],
			'day'   =>2 //$today['mday']
		)
	)
);
$my_query = new WP_Query($args);

if ( $my_query->have_posts() ) {
	echo 999;
}

?>