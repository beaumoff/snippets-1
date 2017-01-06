<?php
// Column Shortcodes
add_shortcode('column', 'opensky_col_function');
function opensky_col_function( $atts, $content = null ) {
   extract( shortcode_atts( array(
      'class' => '',
      ), $atts ) );
	  
   return '<div class="' . esc_attr($class) . '">' . do_shortcode($content) . '</div>';
}
?>
