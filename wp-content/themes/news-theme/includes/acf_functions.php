<?php

/**
 * Options page
 */
if (function_exists('acf_add_options_page')) {


    acf_add_options_sub_page(array(
        'page_title'  => 'Portfolio Settings',
        'menu_title'  => 'Portfolio Settings',
        'parent_slug' => 'edit.php?post_type=merch'
    ));
    // acf_add_options_sub_page(array(
    //     'page_title'  => 'Products Settings',
    //     'menu_title'  => 'Products Settings',
    //     'parent_slug' => 'edit.php?post_type=products'
    // ));

    // acf_add_options_sub_page(array(
    //     'page_title'  => 'Vacancies Settings',
    //     'menu_title'  => 'Vacancies Settings',
    //     'parent_slug' => 'edit.php?post_type=vacancies'
    // ));
}

add_action('admin_menu', 'add_options_pages');
function add_options_pages()
{
    if (!function_exists('acf_add_options_page')) {
        return;
    }
    $parent_settings = acf_add_options_page(array(
        'page_title'     => __('Theme General Settings', 'smarttek'),
        'menu_title'     => __('Theme Settings', 'smarttek'),
        'menu_slug'     => 'theme-settings',
    ));
    $parent = $parent_settings['menu_slug'];
    $sub_options_pages = array(
        'Why Choose Us',
        'SmartTek in Nums',
        'Our Team',
        'Trust Us',
        'Offices Info',
        'Social links',
        'Footer menu',
        'Blog info',
        'Forms',
        'Third-party APIs',
        'UA banner settings',
    );
    foreach ($sub_options_pages as $title) {
        acf_add_options_sub_page(
            array(
                'page_title' => $title,
                'parent_slug' => $parent
            )
        );
    }
}


add_action('acf/init', 'my_acf_init_block_types');
function my_acf_init_block_types()
{

    // Check function exists.
    if (function_exists('acf_register_block_type')) {

        acf_register_block_type(array(
            'name'              => 'editor-lines',
            'title'             => __('STSS Editor with lines'),
            'description'       => __('A custom Editor with lines block.'),
            'render_template'   => 'templates/gutenberg/editor-with-lines.php',
            'category'          => 'common',
            'icon'              => 'admin-comments',
            'position' => 'acf_after_title',
            'keywords'          => array('editor lines', 'editor'),
            'mode' => 'edit',
        ));
        acf_register_block_type(array(
            'name'              => 'slider',
            'title'             => __('STSS Slider'),
            'description'       => __('A custom slider block.'),
            'render_template'   => 'templates/gutenberg/slider/slider.php',
            'category'          => 'formatting',
            'icon'                 => 'images-alt2',
            'align'                => 'full',
            'mode' => 'edit',
            'enqueue_assets'     => function () {
                wp_enqueue_script('swiper', get_stylesheet_directory_uri() . '/includes/js/swiper-bundle.min.js', array('jquery'), null, false);
                wp_enqueue_style('swiper-css', get_stylesheet_directory_uri() . '/includes/css/swiper-bundle.min.css', array(), null, false);

                wp_enqueue_style('block-slider', get_template_directory_uri() . '/templates/gutenberg/slider/slider.min.css', array(), '1.0.0');
                wp_enqueue_script('block-slider', get_template_directory_uri() . '/templates/gutenberg/slider/slider.min.js', array(), '1.0.0', true);
            },
        ));
        acf_register_block_type(array(
            'name'              => 'subscribe-block',
            'title'             => __('STSS Subscribe Block'),
            'description'       => __('A custom block.'),
            'render_template'   => 'templates/gutenberg/subscribe-block/subscribe-block.php',
            'mode' => 'edit',

            'enqueue_assets'     => function () {
                wp_enqueue_style('subscribe-block', get_template_directory_uri() . '/templates/gutenberg/subscribe-block/subscribe-block.css', array(), '1.0.0');
            },
        ));
        acf_register_block_type(array(
            'name'              => 'ask-block',
            'title'             => __('STSS Ask Block'),
            'description'       => __('A custom block.'),
            'render_template'   => 'templates/gutenberg/ask-block/ask-block.php',
            'mode' => 'edit',

            'enqueue_assets'     => function () {
                wp_enqueue_style('ask-block', get_template_directory_uri() . '/templates/gutenberg/ask-block/ask-block.css', array(), '1.0.0');
            },
        ));
        acf_register_block_type(array(
            'name'              => 'custom-list',
            'title'             => __('STSS custom List'),
            'description'       => __('A custom list.'),
            'render_template'   => 'templates/gutenberg/custom-list/custom-list.php',
            'mode' => 'edit',

        ));
        acf_register_block_type(array(
            'name'              => 'gallery',
            'title'             => __('STSS Gallery'),
            'description'       => __('A custom gallery block.'),
            'render_template'   => 'templates/gutenberg/gallery/gallery.php',
            'category'          => 'formatting',
            'icon'                 => 'images-alt2',
            'align'                => 'full',
            'mode' => 'edit',
        ));
        acf_register_block_type(array(
            'name'              => 'summary',
            'title'             => __('STSS Executive summary'),
            'description'       => __('A custom Executive summary block.'),
            'render_template'   => 'templates/gutenberg/summary/summary.php',
            'category'          => 'formatting',
            'icon'                 => 'media-text',
            'align'                => 'full',
            'mode' => 'edit',
        ));
        acf_register_block_type(array(
            'name'              => 'product-summary',
            'title'             => __('STSS Product summary'),
            'description'       => __('A custom Product summary block.'),
            'render_template'   => 'templates/gutenberg/product-summary/product-summary.php',
            'category'          => 'formatting',
            'icon'                 => 'media-text',
            'align'                => 'full',
            'mode' => 'edit',
        ));
        acf_register_block_type(array(
            'name'              => 'product-blocks',
            'title'             => __('STSS Product blocks'),
            'description'       => __('A custom Products blocks block.'),
            'render_template'   => 'templates/gutenberg/product-blocks/product-blocks.php',
            'category'          => 'formatting',
            'icon'                 => 'media-text',
            'align'                => 'full',
            'mode' => 'edit',
        ));
        acf_register_block_type(array(
            'name'              => 'custom-heading',
            'title'             => __('STSS Custom Heading H2'),
            'description'       => __('A Custom Heading H2y block.'),
            'render_template'   => 'templates/gutenberg/custom-heading.php',
            'category'          => 'formatting',
            'icon'                 => 'heading',
            'align'                => 'full',
            'mode' => 'edit',
        ));
    }
}
