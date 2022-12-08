
<?php 
$show_hot_news_section = get_field('show_hot_news_section');
$hot_news_title = get_field('hot_news_title');
$hot_news_text = get_field('hot_news_text');
$hot_news = get_field('choose_hot_news');

if(!$show_hot_news_section) return;
    
?>
<section id="hot-news" class="hot-news">
    <div class="container">
        <div class="hot-news-inner">
            <?php if($hot_news_title) { ?>
            <h3 class="hot-news-title"><?php echo $hot_news_title; ?></h3>
            <?php } ?>
            <?php if($hot_news_text) { ?>
            <p class="hot-news-text"><?php echo $hot_news_text; ?></p>
            <?php } ?>
            <?php
        
            if ($hot_news) : ?>
                <div class="hot-news-posts">
                    <?php foreach ($hot_news as $post_id) :
                        $permalink = get_permalink($post_id);
                        $title = get_the_title($post_id);
                        $image = get_the_post_thumbnail($post_id, 'thumbnail');
                        $desc = get_the_excerpt($post_id);
                    ?>
                        <div class="hot-news-post">
                            <div class="hot-news-post-image">
                                <?php echo $image; ?>
                            </div>
                            <a href="<?php echo esc_url($permalink); ?>">
                                <h4 class="hot-news-post-title"><span><?php echo $title; ?></span></h4>
                            </a>
                            <div class="hot-news-post-desc"><?php echo $desc; ?></div>
                        </div>

                    <?php endforeach; ?>
                </div>
            <?php endif; ?>

        </div>

    </div>
</section>
