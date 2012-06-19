<?php
/*
Plugin Name: my-script-style
Plugin URI: http://www.arundhaj.com
Description: To include your own custom css and script file that are independent on theme.
Author: Arunkumar Dharuman
Author URI: http://www.arundhaj.com
Version: 1.0

Permission is granted to anyone to use this software for any purpose,
including commercial applications, and to alter it and redistribute it
freely, subject to the following restrictions:

1. The origin of this software must not be misrepresented; you must not
 claim that you wrote the original software. if you use this software
 in a product, an acknowledgment in the product documentation would be
 appreciated but is not required.
2. Altered source versions must be plainly marked as such, and must not be
 misrepresented as being the original software.
3. This notice may not be removed or altered from any source distribution.

*/

if (!defined("WP_CONTENT_URL")) define("WP_CONTENT_URL", get_option("siteurl") . "/wp-content");
if (!defined("WP_PLUGIN_URL"))  define("WP_PLUGIN_URL",  WP_CONTENT_URL        . "/plugins");

function my_script_style() {
	$my_plugin = WP_PLUGIN_URL . '/my-script-style/';
	$url = $my_plugin . 'wp_mystyle.css';

    echo "<link rel='stylesheet' type='text/css' href='$url'>\n";
}

add_action('wp_head', 'my_script_style');
?>