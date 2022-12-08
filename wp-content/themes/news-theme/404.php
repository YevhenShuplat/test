<?php get_header(); ?>
<?php
get_template_part('template-parts/partial', 'hero', [
    'title' => '404',
    'subtitle' => 'Not Found',
    'main_button' => [
    	'url' => home_url(),
    	'title' => 'Go Home',
    	'target' => '_self',
    ],
]);


get_footer(); ?>