<?php

// Image size for full width backgrounds
add_image_size( 'full-width', 2048, 2048, false ); // width, height, crop

// Add Additional Image Sizes to Beaver Builder chooser
// https://kb.wpbeaverbuilder.com/article/382-add-custom-image-sizes
add_filter('image_size_names_choose', 'insert_custom_image_sizes'); 
function insert_custom_image_sizes($sizes) {
	global $_wp_additional_image_sizes;
	if (empty($_wp_additional_image_sizes)) {
		return $sizes;
	}
	foreach ($_wp_additional_image_sizes as $id => $data) {
		if (!isset($sizes[$id])) {
			$sizes[$id] = ucfirst(str_replace('-', ' ', $id));
		}
	}
	return $sizes;
}
