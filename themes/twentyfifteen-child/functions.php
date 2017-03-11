<?php
add_image_size( 'tiny', 150, 150, true ); // 220 pixels wide by 180 pixels tall, hard crop mo


function adding_custom_button($atts, $content = null) {
	extract(shortcode_atts(array(
	'col' => 'col-xs-12'
	), $atts));
return '<div class="'.$col.'">'.$content.'</div>';
}

add_shortcode('col', 'adding_custom_button');

function filter_ptags_on_images($content){
   return preg_replace('/<p>\s*(<a .*>)?\s*(<img .* \/>)\s*(<\/a>)?\s*<\/p>/iU', '\1\2\3', $content);
}

add_filter('the_content', 'filter_ptags_on_images');

/**
 * Filter the except length to 20 words.
 *
 * @param int $length Excerpt length.
 * @return int (Maybe) modified excerpt length.
 */
function wpdocs_custom_excerpt_length( $length ) {
    return 6;
}
add_filter( 'excerpt_length', 'wpdocs_custom_excerpt_length', 999 );
?>