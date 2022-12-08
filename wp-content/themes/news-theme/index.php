<?php
get_header();
get_template_part('template-parts/partial', 'hero', [
	'title' => get_field('hero_title')

]);
?>
<div class="site-content">
    <div class="container">
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
<?php
// get_sidebar(); // Call the theme’s sidebar.php file.
get_footer();
