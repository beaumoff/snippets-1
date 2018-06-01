<?php

//* Enqueue Fonts
add_action( 'wp_enqueue_scripts', 'opensky_enqueue_scripts_fonts' );
function opensky_enqueue_scripts_fonts() {
	wp_enqueue_style( 'opensky-fonts', '//fonts.googleapis.com/css?family=Roboto:400,600', array(), CHILD_THEME_VERSION );
}
