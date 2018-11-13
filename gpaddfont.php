// Add a new font to GeneratePress
// https://docs.generatepress.com/article/customizing-the-google-font-list/
add_filter( 'generate_typography_customize_list', 'opensky_add_google_fonts' );
function opensky_add_google_fonts( $fonts ) {
	$fonts[ 'faustina' ] = array( 
		'name' => 'Faustina',
		'variants' => array( '400', '400i', '600', '600i' ),
		'category' => 'serif'
	);
	return $fonts;
}
