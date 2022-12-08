<?php

/**
 * The function include a css files
 */
add_action('wp_enqueue_scripts', 'include_css_files');
function include_css_files()
{
    wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/includes/css/swiper-bundle.min.css', array(), null, false);
    wp_enqueue_style('style', get_stylesheet_directory_uri() . '/includes/css/main.css', array(), null, false);
}

/**
 * The function include a javascript files
 */
add_action('wp_enqueue_scripts', 'include_javascript_files');
function include_javascript_files()
{

    wp_enqueue_script('jquery');
    wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/includes/js/swiper-bundle.min.js', array('jquery'), null, false);
    wp_enqueue_script('main', get_stylesheet_directory_uri() . '/includes/js/main.js', array(), null, false);
}

// function gutenberg_blocks_admin()
// {
//     wp_enqueue_script(
//         'gutenberg-blocks-editor',
//         get_stylesheet_directory_uri() . '/includes/js/centered-block.js',
//         array('wp-blocks', 'wp-element')
//     );
//     wp_enqueue_style(
//         'gutenberg-blocks-editor',
//         get_stylesheet_directory_uri() . '/includes/css/admin-blocks.css',

//         array()
//     );
// }
// add_action('enqueue_block_editor_assets', 'gutenberg_blocks_admin');

