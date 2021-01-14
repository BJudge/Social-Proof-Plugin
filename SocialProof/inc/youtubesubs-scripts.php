<?php

function yts_add_scripts() {
    //Add Main CSS
    wp_enqueue_style('yts-main-style', plugins_url(). '/youtubesubs/css/style.css');
    //Add Main  Scripts
    wp_enqueue_script('yts-main-script', plugins_url(). '/youtubesubs/js/main.js');

}

    add_action('wp_enqueue_scripts', 'yts_add_scripts');

?>