<?php

function lamed_enqueue_scripts() {
    wp_enqueue_style( 'stylesheet', get_stylesheet_uri(), array(), filemtime( get_template_directory() . '/style.css' ), 'all' );
}

add_action( 'wp_enqueue_scripts', 'lamed_enqueue_scripts' );


