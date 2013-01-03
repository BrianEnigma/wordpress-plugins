<?php
/*
Plugin Name: Netninja Custom Meta
Plugin URI: http://netninja.com
Description: A simple plugin to add custom meta tags
Author: Brian Enigma
Version: 1.0
*/

function netninjaCustomMetaFunction()
{
	?>
	<meta name="ICBM" content="45.42049,-122.73197" />
	<meta name="DC.title" content="Netninja.com" />
	<meta name="geo.position" content="45.42049;-122.73197" />
	<meta name="geo.region" content="US" />
	<meta name="geo.placename" content="Portland" />
	<?php
	/*

	<link rel="stylesheet" type="text/css" media="all" href="http://netninja.com/wp-content/plugins/custom-meta/tweet.css" />
	<script type="text/javascript" src="http://netninja.com/wp-content/plugins/custom-meta/styleTweets.js"></script>
	<link rel="openid.server" href="http://netninja.com/openid/" />
	<link rel="openid.delegate" href="http://netninja.com/openid/" />
	<link rel="openid2.provider" href="http://netninja.com/openid/" />
	<meta content='http://netninja.com/openid/' http-equiv='X-XRDS-Location'/>
	*/
}

add_action ('wp_head', 'netninjaCustomMetaFunction');
