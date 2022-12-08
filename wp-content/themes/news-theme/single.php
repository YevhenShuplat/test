<?php
get_header();
get_template_part('template-parts/partial', 'hero', [
    'title' => get_the_title(),
]);
?>
<div class="site-content">
    <div class="container">
        <div class="single-content">
            <?php
            if (have_posts()) :

                while (have_posts()) : the_post();

                    the_content();

                endwhile;

            else :

                _e('Sorry, no  posts matched your criteria.', 'news-test');

            endif;

            ?>
        </div>
    </div>
</div>
<?php
get_footer();
