<?php
//* Use a Beaver Builder image to link to a Video Popup.
add_action( 'wp_enqueue_scripts', 'opensky_video_popup_thumbnail' );
function opensky_video_popup_thumbnail() {
	wp_enqueue_script( 'jquery_magnificpopup_min_js', plugins_url() . '/bb-plugin/js/jquery.magnificpopup.min.js', array('jquery'), '', true );
	wp_enqueue_style( 'jquery_magnificpopup', plugins_url( ) .'/bb-plugin/css/jquery.magnificpopup.css' );
	wp_enqueue_script( 'jquery_video_popup_js', get_stylesheet_directory_uri().'/js/video-popup.js', array('jquery'), '', true );
}
?>
