<?php get_header(); ?>
<article id="post" class="lower-page">
    <div class="container">
        <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                <h2 class="post-ttl"><?php echo get_the_title($ID); ?></h2>
                <div class="post-content">
                    <div class="post-stats">
                        <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                        <p><?php the_category(', '); ?></p>
                    </div>
                    <p><?php the_content('Read more'); ?></p>
                    <div class="archive-link">
                        <ul class="flex-btw">
                            <li><?php next_post_link('%link', '≪新しい記事へ'); ?></li>
                            <li><a href="<?php echo esc_url(home_url('/')) ?>archive">投稿一覧</a></li>
                            <li><?php previous_post_link('%link', '古い記事へ≫'); ?></li>
                        </ul>
                    </div>
                    <div class="share-btn">
                        <p>-SHARE-</p>
                        <ul>
                            <li class="share-twitter">
                                <a href="https://twitter.com/share?url=<?php echo get_the_permalink(); ?>&via=dabaiosamu&text=<?php echo get_the_title(); ?>" target="_blank" rel="noopener">
                                    <i class="fab fa-twitter"></i>Tweet</a></li>
                            <li class="share-pocket">
                                <a href="http://getpocket.com/edit?url=<?php echo get_the_permalink(); ?>&title=<?php echo get_the_title(); ?>|ダバイ治" rel="nofollow" rel="nofollow" target="_blank">
                                    <i class="fab fa-get-pocket"></i>Pocket</a></li>
                        </ul>
                    </div>
            <?php endwhile;
        endif; ?>
                </div>
    </div>
</article>
<?php get_footer(); ?>