<?php

add_action('init', function () {
    wp_enqueue_style('fontawesome', get_template_directory_uri() . '/assets/css/all.min.css', array(), '', false);
});
