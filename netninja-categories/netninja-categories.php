<?php
/*
Plugin Name: Netninja-Categories
Plugin URI: http://netninja.com
Description: Add category pictures to blog posts
Version: 1.0
Author: Brian Enigma
Author URI: http://netninja.com
*/

add_filter('the_content', 'nncat_content_filter');

$nncat_category_slugs_with_pictures = array(
    'books',
    'code',
    'dear-diary',
    'dreams',
    'favorites',
    'food',
    'gadgets',
    'games',
    'iphone', 
    'lost', 
    'makerbot',
    'mobile',
    'movies',
    'music',
    'pictures',
    'portland',
    'projects',
    'questions',
    'quotes',
    'software',
    'television',
    'twitter',
    'work'
);

function nncat_content_filter($content)
{
    global $post;
    global $nncat_category_slugs_with_pictures;
    $post_categories = wp_get_post_categories($post->ID);

    $cats = array();
	
    foreach($post_categories as $c)
    {
        $cat = get_category( $c );
        if (in_array($cat->slug, $nncat_category_slugs_with_pictures))
        {
            $cats[] = array( 'name' => $cat->name, 'slug' => $cat->slug );
        }
    }
    if (count($cats) > 0)
    {
        $cat_text = '';
        foreach($cats as $cat)
        {
            $cat_text = $cat_text . '<a href="http://netninja.com/category/' . $cat['slug'] . '">' .
                '<img src="http://netninja.com/wp-content/plugins/netninja-categories/' . $cat['slug'] . '.png" width="32" height="32" alt="' . $cat['name'] . '" title="' . $cat['name'] . '" style="box-shadow:none; margin:0; padding:0; border:0; vertical-align:middle;" />' .
                '</a> ';
        }
        $boilerplate = "Posted in: " . $cat_text;
        $content = '<div style="font-size:9pt; margin:1em; padding:0.5em 2em; border:solid #cccccc 2px; border-radius:15px; -moz-border-radius:15px; -webkit-border-radius:15px; background-color:#ffffff; color:#000000;">' .
            $boilerplate . '</div>' . $content;
    }
    return $content;
}


?>
