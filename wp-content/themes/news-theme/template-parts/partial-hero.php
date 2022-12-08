<?php

$hero_title = @$args['title'] ?  $args['title'] : get_field('hero_title');
$hero_content = @$args['subtitle'] ? $args['subtitle'] : get_field('hero_content');
$button_link = @$args['main_button'] ? $args['main_button'] : get_field('button_link');
$after_button_text = get_field('after_button_text');
$show_scroll_to_button = get_field('show_scroll_to_button');
$scroll_to_button = get_field('scroll_to_button');

?>

<section class="hero">
    <img class="hero-bg" src="<?php echo get_template_directory_uri() . '/images/bg.svg'; ?>">
    <div class="container">
        <div class="hero-inner">
            <h1 class="hero-title">
                <?php echo $hero_title; ?>

            </h1>
            <?php if ($hero_content) { ?>
                <p class="hero-desc">
                    <?php echo $hero_content; ?>
                </p>
            <?php } ?>
            <?php if ($button_link) {
                $link_target = $button_link['target'] ? $button_link['target'] : '_self';
            ?>
                <div class="hero-link-cover">
                    <a class="hero-link" target="<?php echo esc_attr($link_target); ?>" href="<?php echo $button_link['url']; ?>"><span><?php echo $button_link['title']; ?></span>
                        <img src="<?php echo get_template_directory_uri() . '/images/icons/apple-icon.svg'; ?>" alt="apple-icon">
                    </a>
                    <?php if ($after_button_text) { ?>
                        <div class="hero-text"><?php echo $after_button_text; ?></div>
                    <?php } ?>
                </div>
            <?php } ?>
        </div>
    </div>
    <?php if ($show_scroll_to_button) { ?>
        <a class="hero-link-scrolldown" href="<?php echo $scroll_to_button; ?>"><img src="<?php echo get_template_directory_uri() . '/images/scroll-down-arrow.svg'; ?>" alt="scroll-down-arrow"></a>
    <?php } ?>
</section>