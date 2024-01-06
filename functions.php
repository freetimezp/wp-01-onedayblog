<?php

use function PHPSTORM_META\map;

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
    add_image_size('post-preview-small', 100, 100, true);

    //register menus
    register_nav_menus(
        array(
            'header-menu' => __('Header Menu'),
            'sidebar-menu' => __('Sidebar Menu'),
            'footer-menu' => __('Footer Menu'),
        )
    );
});



//register sidebars 
add_action('widgets_init', function () {
    register_sidebar(array(
        'name'          => 'Primary Sidebar',
        'id'            => 'sidebar-1',
        'before_widget' => '<aside id="%1$s" class="widget %2$s">',
        'after_widget'  => '</aside>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => 'Footer Sidebar 1',
        'id'            => 'sidebar-footer-1',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
    register_sidebar(array(
        'name'          => 'Footer Sidebar 2',
        'id'            => 'sidebar-footer-2',
        'before_widget' => '<ul><li id="%1$s" class="widget %2$s">',
        'after_widget'  => '</li></ul>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ));
});



//custom logo
add_action('after_setup_theme', function () {
    $defaults = array(
        'height' => 100,
        'width' => 400,
        'flex-height' => true,
        'flex-width' => true,
        'header-text' => array('site-title', 'site-description'),
        'unlink-homepage-logo' => true,
    );

    add_theme_support('custom-logo', $defaults);
});


add_action('customize_register', function ($wp_customize) {
    //image slider section
    $wp_customize->add_section('theme_slider_settings', array(
        'title' => 'Slider Settings',
        'description' => 'Add slider settings here',
        'priority' => 160,
        'capability' => 'edit_theme_options',
    ));

    //activate slider settings
    $wp_customize->add_setting('onedayblog_home_slide_activate', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '1',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('onedayblog_home_slide_activate', array(
        'type' => 'checkbox',
        'section' => 'theme_slider_settings', // Required, core or custom.
        'label' => __('Activate Image Slider'),
        'description' => __('Activate or deactivate Image Slider'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => '',
        ),
    ));

    //slide 1
    $wp_customize->add_setting('onedayblog_home_slide_1', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'onedayblog_home_slide_1',
            array(
                'label'      => 'Image Slide 1',
                'section'    => 'theme_slider_settings',
                'height' => 800, // cropper Height
                'width' => 1200, // Cropper Width
                'flex_width' => false, //Flexible Width
                'flex_height' => false, // Flexible Heiht
            )
        )
    );

    //slide 1 text settings
    $wp_customize->add_setting('onedayblog_home_slide_header_text_1', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_setting('onedayblog_home_slide_content_text_1', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('onedayblog_home_slide_header_text_1', array(
        'type' => 'text',
        'section' => 'theme_slider_settings', // Required, core or custom.
        'label' => __('Slide 1 title text'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => '',
            'placeholder' => __('title text here'),
        ),
    ));

    $wp_customize->add_control('onedayblog_home_slide_content_text_1', array(
        'type' => 'textarea',
        'section' => 'theme_slider_settings', // Required, core or custom.
        'label' => __('Slide 1 content text'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => '',
            'placeholder' => __('content text here'),
        ),
    ));

    //slide 2
    $wp_customize->add_setting('onedayblog_home_slide_2', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'onedayblog_home_slide_2',
            array(
                'label'      => 'Image Slide 2',
                'section'    => 'theme_slider_settings',
                'height' => 800, // cropper Height
                'width' => 1200, // Cropper Width
                'flex_width' => false, //Flexible Width
                'flex_height' => false, // Flexible Heiht
            )
        )
    );

    //slide 2 text settings
    $wp_customize->add_setting('onedayblog_home_slide_header_text_2', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_setting('onedayblog_home_slide_content_text_2', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('onedayblog_home_slide_header_text_2', array(
        'type' => 'text',
        'section' => 'theme_slider_settings', // Required, core or custom.
        'label' => __('Slide 2 title text'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => '',
            'placeholder' => __('title text here'),
        ),
    ));

    $wp_customize->add_control('onedayblog_home_slide_content_text_2', array(
        'type' => 'textarea',
        'section' => 'theme_slider_settings', // Required, core or custom.
        'label' => __('Slide 2 content text'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => '',
            'placeholder' => __('content text here'),
        ),
    ));

    //slide 3
    $wp_customize->add_setting('onedayblog_home_slide_3', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control(
        new WP_Customize_Cropped_Image_Control(
            $wp_customize,
            'onedayblog_home_slide_3',
            array(
                'label'      => 'Image Slide 3',
                'section'    => 'theme_slider_settings',
                'height' => 800, // cropper Height
                'width' => 1200, // Cropper Width
                'flex_width' => false, //Flexible Width
                'flex_height' => false, // Flexible Heiht
            )
        )
    );

    //slide 3 text settings
    $wp_customize->add_setting('onedayblog_home_slide_header_text_3', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_setting('onedayblog_home_slide_content_text_3', array(
        'type' => 'theme_mod', // or 'option'
        'capability' => 'edit_theme_options',
        'default' => '',
        'transport' => 'refresh', // or postMessage
        'sanitize_callback' => 'sanitize_text_field',
    ));

    $wp_customize->add_control('onedayblog_home_slide_header_text_3', array(
        'type' => 'text',
        'section' => 'theme_slider_settings', // Required, core or custom.
        'label' => __('Slide 3 title text'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => '',
            'placeholder' => __('title text here'),
        ),
    ));

    $wp_customize->add_control('onedayblog_home_slide_content_text_3', array(
        'type' => 'textarea',
        'section' => 'theme_slider_settings', // Required, core or custom.
        'label' => __('Slide 3 content text'),
        'input_attrs' => array(
            'class' => 'my-custom-class-for-js',
            'style' => '',
            'placeholder' => __('content text here'),
        ),
    ));
});


require get_template_directory() . '/template-parts/walker.php';
require get_template_directory() . '/template-parts/widgets.php';
