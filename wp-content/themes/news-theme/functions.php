<?php

/*********************************************************************************
 * The register miniature
 *********************************************************************************/
if (function_exists('add_theme_support')) {
    add_theme_support('post-thumbnails');
}

/**********************************************************************************
 * Register menu
 **********************************************************************************/

if (!function_exists('news_register_nav_menu')) {
    function news_register_nav_menu()
    {
        register_nav_menus(array(
            'main_menu' => __('Main Menu', 'news-test'),
            'footer_menu'  => __('Footer Menu', 'news-test'),
        ));
    }
    add_action('after_setup_theme', 'news_register_nav_menu', 0);
}

/**********************************************************************************
 * Include js and css files
 **********************************************************************************/
include(get_template_directory() . '/includes/enqueue-script-style.php');


/**********************************************************************************
 * Include custom post-types
 **********************************************************************************/
include(get_template_directory() . '/includes/post-types.php');


function post_pagination($paged = '', $max_page = '')
{
    if (!$paged) {
        $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);
    }

    if (!$max_page) {
        global $wp_query;
        $max_page = isset($wp_query->max_num_pages) ? $wp_query->max_num_pages : 1;
    }

    $big  = 999999999;

    $prev_btn = '<svg width="24" height="42" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M2.18692e-05 21L23.2258 0L23.2258 42L2.18692e-05 21Z" fill="#0094FF"/>
    </svg>
    ';
    $next_btn = '<svg width="24" height="42" viewBox="0 0 24 42" fill="none" xmlns="http://www.w3.org/2000/svg">
    <path d="M23.8386 21L0.612791 0L0.612793 42L23.8386 21Z" fill="#0094FF"/>
    </svg>
    ';
    $html = paginate_links(array(
        'base'       => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
        'format'     => '?paged=%#%',
        'current'    => max(1, $paged),
        'total'      => $max_page,
        'mid_size'   => 1,
        'prev_next'       => True,
        'prev_text'  => __($prev_btn),
        'next_text'  => __($next_btn),
    ));

    $html = "<div class='navigation pagination'>" . $html . "</div>";

    echo $html;
}

register_sidebar(array(
    'name' => __('News Page', 'news-test'),
    'id' => 'news-page-sidebar',
    'description' => __('Widgets in this area will be shown on all posts and pages.', 'news-test'),
    'class'     => 'news-sidebar',
));



add_action('pre_get_posts', 'hide_taxonomy_archive');
function hide_taxonomy_archive($qry)
{

    if (is_admin()) return;

    if (is_tax('merch_tax')) {
        $qry->set_404();
    }
}
