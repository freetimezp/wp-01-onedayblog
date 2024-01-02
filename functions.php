<?php

add_action('init', function () {
    //add font awesome style
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), '', false);

    //custom styles
    wp_enqueue_style('customstyle01', get_template_directory_uri() . '/style.css', array(), '', false);


    //add wp widgets, menus
    add_theme_support('widgets');
    add_theme_support('menus');

    //add featured images in posts
    add_theme_support('post-thumbnails');
    //add special size for post images, you can add many size, just change name
    add_image_size('post-preview', 280, 180, true);
});
