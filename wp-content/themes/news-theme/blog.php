<?php

/**
 * Template Name: Blog Template
 */ ?>
<?php get_header();
get_template_part('template-parts/partial', 'hero', [
    'title' => get_field('hero_title'),

]);
?>
<main>
    <div class="blog-site">
        <div class="container">
            <div class="blog-site-inner">
                <div class="blog-site-posts">
                    <ul class="breadcrumbs">
                        <li><a href="/">Home</a></li>
                        <li>News</li>
                    </ul>
                    <?php
                    $paged = (get_query_var('paged')) ? get_query_var('paged') : ((get_query_var('page')) ? get_query_var('page') : 1);

                    $args = array(
                        'post_type' => 'post',
                        'post_status' => 'publish',
                        'posts_per_page' => 2,
                        'order' => 'DESC',
                        'orderby' => 'date',
                        'paged' => $paged
                    );

                    $loop = new WP_Query($args);
                    if ($loop->have_posts()) :
                        while ($loop->have_posts()) :
                            $loop->the_post();
                            $permalink = get_permalink($post->ID);
                            $title = get_the_title($post->ID);
                            $image = get_the_post_thumbnail($post->ID);
                            $desc = get_the_excerpt($post->ID);
                    ?>
                            <div class="blog-site-post">
                                <div class="blog-site-post-image">
                                    <?php echo $image; ?>
                                </div>
                                <h4 class="blog-site-post-title"><span><?php echo $title; ?></span></h4>
                                <div class="blog-site-post-exceprt"><?php echo $desc; ?></div>
                                <a class="blog-site-post-more" href="<?php echo esc_url($permalink); ?>">Read More</a>
                            </div>

                    <?php
                        endwhile;

                        post_pagination($paged, $loop->max_num_pages);
                    endif;

                    wp_reset_postdata();
                    ?>

                </div>
                <div class="blog-site-sidebar">
                    <?php get_sidebar('primary'); ?>
                </div>
            </div>
        </div>
    </div>

</main>

<?php get_footer(); ?>