<?php

// Actions
add_action('wp_enqueue_scripts', function(){
    wp_enqueue_style('vidsoe-theme', get_stylesheet_uri(), [], '1.0');
}, 1000);
