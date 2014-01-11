<?php
/*
Plugin Name: iOS Link Meta
Plugin URI: http://netninja.com
Description: A simple plugin to add iOS meta tags to certain posts
Author: Brian Enigma
Version: 1.0
*/

function netninjaCustomIOSMetaFunction()
{
	global $post;
	$pagename = $post->post_name;
	if ('arg-tools' == $pagename)
	{
// https://itunes.apple.com/us/app/arg-tools/id374959430?mt=8&uo=4
?>
<meta name="apple-itunes-app" content="app-id=374959430" />
<?php
	} else if ('puzzle-sidekick' == $pagename) {
// https://itunes.apple.com/us/app/puzzle-sidekick/id678644111?mt=8&uo=4
?>
<meta name="apple-itunes-app" content="app-id=678644111" />
<?php
	}
}

add_action ('wp_head', 'netninjaCustomIOSMetaFunction');

