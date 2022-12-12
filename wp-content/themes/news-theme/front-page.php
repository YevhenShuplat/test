<?php
get_header();
?>

<div class="site-content">

    <?php
    get_template_part('template-parts/partial', 'hero');
    if (have_posts()) :

        while (have_posts()) : the_post();

            the_content();

        endwhile;

    else :

        _e('Sorry, no  posts matched your criteria.', 'news-test');

    endif;


    ?>

</div>
<?php

get_footer();
