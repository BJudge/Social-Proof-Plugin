<?php

/*
Plugin Name: Social Proof
Plugin URI: https://ichorcache.com
Description: Displays your social equity in widget form.
Version: 1.0.0
Author: The Bart Judge
Author URI: https://ichorcache.com
*/

//Exit is accessed directly
if(!defined('ABSPATH')) {
    exit;
}
// load scripts
require_once(plugin_dir_path(__FILE__.'/inc/youtubesubs-scripts.php'));

//load class
require_once(plugin_dir_path(__FILE__.'/inc/youtubesubs-class.php'));

// register widget
function register_youtubesubs() {
    register_widget('Youtube_Subs_Widget'); //register class name
}

add_action('widgets_init', 'register_youtubesubs');

?>