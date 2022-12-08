<?php
$show_clients_logos_section = get_field('show_clients_logos_section');
$clients_section_title = get_field('clients_section_title');
$choose_logos = get_field('choose_logos');


if (!$show_hot_news_section) return; ?>
<section id="clients" class="clients">
    <div class="container">
        <div class="clients-inner">
            <?php if ($clients_section_title) { ?>
                <h3 class="clients-title"><?php echo $clients_section_title; ?></h3>
            <?php } ?>

            <?php

            if ($choose_logos) : ?>
                <div class="clients-items">
                    <?php foreach ($choose_logos as $post_id) :
                        $title = get_the_title($post_id);
                        $image = get_the_post_thumbnail($post_id, 'large');
                    ?>
                        <div class="clients-item">
                            <?php echo $image; ?>
                        </div>


                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>

    </div>
</section>