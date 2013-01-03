<?php
/*
Plugin Name: Hipster PDA Shortcode
Plugin URI: http://netninja.com
Description: Adds the [hipsterpda] shortcode for displaying boilerplate Hipster PDA information
Author: Brian Enigma
Version: 1.0
Author URI: http://netninja.com
*/ 

function shortcode_hipsterpda($atts, $content, $tag) {
	$output = '<div style="width:40em; font-size:8pt; border:dashed 2px black; margin:0 auto; padding:1em; -moz-border-radius:1em; -webkit-border-radius:1em; color:black; background-color:#ffff99;">';
	$output .= 'This page is part of the <a href="http://netninja.com/hipsterpda/" style="color:black;">Netninja.com Hipster PDA templates</a>.  ';
	$output .= 'For more templates see the <a href="http://netninja.com/hipsterpda/" style="color:black;">index of Hipster PDA pages</a>.  ';
	$output .= 'For details about how I use these templates in my everyday life, look for <a href="http://netninja.com/tag/hipsterpda/" style="color:black;">posts tagged "hipsterpda."</a>';
	$output .= '</div>';
	return $output;
}

add_shortcode('hipsterpda', 'shortcode_hipsterpda');

?>
