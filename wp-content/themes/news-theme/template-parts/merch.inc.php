<?php
$merch_section_title = get_field('merch_section_title');
$merch_section_description = get_field('merch_section_description');
$choose_merch = get_field('choose_merch');

?>

<div class="merch">
    <img class="merch-bg" src="<?php echo get_template_directory_uri() . '/images/buy-now.png'; ?>">
    <div class="container">
        <div class="merch-inner">
            <?php if ($merch_section_title) { ?>
                <h3 class="merch-title">
                    <?php echo $merch_section_title; ?>
                </h3>
            <?php } ?>
            <?php if ($merch_section_description) { ?>
                <p class="merch-text"> <?php echo $merch_section_description; ?></p>
            <?php } ?>
            <?php

            $args = array(
                'post_type' => 'merch',
                'post_per_page' => 6,
                'order'   => 'ASC',
                'post__in' => $choose_merch,
            );

            $merch_query = new WP_Query($args);

            // The Loop
            if ($merch_query->have_posts()) {
            ?>
                <div class="swiper merch-slider">
                    <div class="swiper-wrapper">
                        <?php
                        while ($merch_query->have_posts()) {
                            $merch_query->the_post();
                            global $post;
                        ?>
                            <div class="swiper-slide">
                                <div class="merch-slider-item">
                                    <div class="merch-slider-left">
                                        <h4 class="merch-slider-item-title"><?php echo get_field('title'); ?></h4>
                                        <?php echo get_field('merch_description'); ?>
                                    </div>
                                    <div class="merch-slider-right">
                                        <img src="<?php echo get_the_post_thumbnail_url($post->ID, 'large'); ?>">
                                    </div>
                                </div>
                            </div>

                        <?php
                        }
                        ?>

                    </div>
                    <div class="merch-slider-controls">
                        <div class="merch-slider-pagination">
                            <div class="swiper-pagination"></div>
                        </div>
                        <div class="merch-slider-buttons">
                        <div class="swiper-button-prev">
                                <svg width="24" height="38" viewBox="0 0 24 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M1.44721 17.5165C0.568994 18.3105 0.568993 19.6895 1.4472 20.4835L19.6909 36.9789C20.9769 38.1416 23.0323 37.2291 23.0323 35.4954L23.0323 2.50464C23.0323 0.770919 20.9769 -0.141626 19.6909 1.02113L1.44721 17.5165Z" fill="#0094FF" />
                                </svg>

                            </div>
                            <div class="swiper-button-next">
                                <svg width="24" height="38" viewBox="0 0 24 38" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M22.3915 20.4835C23.2697 19.6895 23.2697 18.3105 22.3915 17.5165L4.1478 1.02113C2.8618 -0.141625 0.806456 0.77092 0.806456 2.50464L0.806457 35.4954C0.806457 37.2291 2.8618 38.1416 4.1478 36.9789L22.3915 20.4835Z" fill="#0094FF" />
                                </svg>
                            </div>
                          
                        </div>
                    </div>

                </div>
            <?php
            }
            wp_reset_postdata();
            ?>

        </div>


    </div>
</div>