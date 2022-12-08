<?php
get_header();
?>

<div class="site-content">

    <?php
   get_template_part('template-parts/partial', 'hero');
    include get_template_directory() . '/template-parts/hot-news.inc.php';
    include get_template_directory() . '/template-parts/merch.inc.php';
    include get_template_directory() . '/template-parts/clients-logos.inc.php';
    include get_template_directory() . '/template-parts/about-us.inc.php';
    ?>




</div>
<?php

get_footer();
