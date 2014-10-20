<?php

function get_interchange_img($img_dir, $sizes, $alt_text=null, $fallback_img='medium') {
	if( $img_dir === 'theme' ) {
		$img_dir = get_template_directory_uri() . '/lib/assets/';
	}

	$data = '';

	foreach( $sizes as $media => $file ) {
		$data .= '[' . $img_dir . $file . ', (' . $media . ')], ';
	}

	$data = substr($data, 0, strlen($data) - 2);

	$result = '<img ';

	if( $alt_text ) $result .= 'alt="' . $alt_text . '" ';

	$result .= 'data-interchange="' . $data . '">';

	if( isset($sizes[ $fallback_img ]) ) {
		$fallback_src = $img_dir . $sizes[ $fallback_img ];
	}
	else {
		$fallback_src = $img_dir . array_values($sizes)[0];
	}

	$result .= '<noscript><img ';

	if( $alt_text ) $result .= 'alt="' . $alt_text . '" ';

	$result .= 'src="' . $fallback_src . '"></noscript>';

	return $result;
}

function the_interchange_img($img_dir, $sizes, $alt_text=null, $fallback_img='medium') {
	echo get_interchange_img($img_dir, $sizes, $alt_text, $fallback_img);
}