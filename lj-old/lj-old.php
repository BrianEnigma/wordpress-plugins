<?php
/*
Plugin Name: LJ-Old
Plugin URI: http://netninja.com
Description: Add boilerplate information to really old posts that were imported from LiveJournal
Version: 1.0
Author: Brian Enigma
Author URI: http://netninja.com
*/

add_filter('the_content', 'ljo_content_filter');

define('LJO_DATE_UNIX', '1175990400');
define('LJO_DATE_TEXT', '8 April 2007');

function ljo_content_filter($content)
{
    if (get_the_time('U') < 1175990400) // 2007-04-08 as Unix timestamp
    {
        $url = "http://brianenigma.livejournal.com/" . get_the_time('Y') . "/" . get_the_time('m') . "/" . get_the_time('d');
        $boilerplate = "Please note that all blog posts before <i>" . LJO_DATE_TEXT . "</i> " .
            "were automatically imported from LiveJournal.  To see the comments and any LiveJournal-specific " .
            "extras such as polls and user icons, please go to the source posting at " .
            "<a href=\"" . $url . "\">" . $url . "</a>";
        $content = '<div style="font-size:9pt; margin:1em; padding:0.5em 2em; border:solid black 2px; border-radius:15px; -moz-border-radius:15px; -webkit-border-radius:15px; background-color:#cccccc; color:#000000; font-weight:bold;">' .
            '<a href="' . $url . '">' . 
            '<img src="http://netninja.com/wp-content/plugins/lj-old/lj-icon.png" width="64" height="64" style="padding:0; margin:0.5em 1em 0 0; float:left; box-shadow:none;" />' .
            '</a>' .
            $boilerplate . '</div>' . $content;
    }
    return $content;
}


?>
