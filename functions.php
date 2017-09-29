<?php

function load_styles() {
    wp_register_style('theme_style', get_stylesheet_uri(), '', '1.0', '', 'all');
    wp_enqueue_style('theme_style');
}

add_action ('wp_enqueue_scripts', 'load_styles');

function widgets_sidebar() {
    register_sidebar(array(
        'name' => __('Main Sidebar', 'apk'),
        'id' => 'main_sidebar',
        'description' => __('This is the main sidebar', 'apk'),
        'before_widget' => '<div id="%1%$s" class="widget %2%$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3 class="widget-title">',
        'after_title' => '</h3>')
    );
}

add_action ('widgets_init', 'widgets_sidebar');
?>
