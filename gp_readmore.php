
// Remove Read More text from Excerpts
// https://docs.generatepress.com/article/generate_excerpt_more_output/
add_filter( 'generate_excerpt_more_output','osws_excerpt_more_output' );
function osws_excerpt_more_output() {
	return '&nbsp;&hellip;';
}
