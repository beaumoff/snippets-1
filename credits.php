<?php
// Copyright Credit Shortcode
// Usage: [credits oscredit="false" title="" link="" link_title=""]
add_shortcode('credits', 'opensky_credits_function');
function opensky_credits_function( $atts, $content = null ) {
   extract( shortcode_atts( array(
      'oscredit' => 'true', //set true|false for link to Open Sky
      'title' => 'Open Sky Web Studio',
      'link' => 'http://www.openskywebstudio.com',
      'link_title' => 'Open Sky Web Studio | Clean, effective Websites',
      ), $atts ) );

	$creds = "Copyright &copy; " . date('Y') . " <a href='".get_option('home')."' title='".get_bloginfo('name')." | ".get_bloginfo('description')."'>".get_bloginfo('name')."</a>. All Rights Reserved. ";
	if (strtolower($oscredit) == "false")
		$creds .= "<!--";
	$creds .= "<a href='".$link."' title='".$link_title."' target='_blank'>".$title."</a> &middot; ";
	if (strtolower($oscredit) == "false")
		$creds .= "-->";
	$creds .= wp_loginout('', false) . wp_register(' &middot; ', '', false) ;
	return $creds;
}
?>