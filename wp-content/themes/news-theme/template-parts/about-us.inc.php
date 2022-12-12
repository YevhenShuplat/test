<?php
$about_us_title = get_field('about_us_title', $atts['id']);
$about_us_content = get_field('about_us_content', $atts['id']);

?>

<section id="about-us" class="about-us">
    <div class="container">
        <div class="about-us-inner">
            <div class="about-us-title">
                <h4><?php echo $about_us_title; ?></h4>
            </div>
            <div class="about-us-content">
                <?php echo $about_us_content; ?>
            </div>
        </div>
    </div>
</section>