<?php
/*
Template Name: Archives
*/
get_header(); ?>
<main id="archive" class="lower-page">
    <div class="container">
        <div class="archive-content blog-list">
            <h2 class="archive-ttl-h2"><?php the_title(); ?></h2>
            <ul class="flex-ard">
                <?php
                $paged = get_query_var('paged') ?: 1;
                $args = array(
                    'posts_per_page' => 10,
                    'orderby' => 'date',
                    'paged' => $paged,
                );
                $the_query = new WP_Query($args);
                if ($the_query->have_posts()) :
                    if (function_exists('pagination')) :
                        pagination($the_query->max_num_pages, $paged);
                    endif;
                    while ($the_query->have_posts()) : $the_query->the_post();
                ?>
                        <li>
                            <a class="post-container flex" href="<?php the_permalink(); ?>">
                                <div class="thumbnail">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail(array(300, 300));
                                    } else {
                                        echo '<img src="' . get_stylesheet_directory_uri() . '/img/common/thumbnail-dummy.png" alt="サムネイルなし">';
                                    } ?>
                                </div>
                                <div class="post">
                                    <span class="post-title <?php
                                                            $days = 14;
                                                            $today = date_i18n('U');
                                                            $entry_day = get_the_time('U');
                                                            $keika = date('U', ($today - $entry_day)) / 86400;
                                                            if ($days > $keika) :
                                                                echo 'post-new';
                                                            endif; ?>">
                                        <?php the_title(); ?>
                                    </span>
                                    <time class="post-date" datetime="<?php echo get_the_date(); ?>"><?php echo get_the_date(); ?></time>
                                </div>
                            </a>
                        </li>
                <?php
                    endwhile;
                endif;
                if (function_exists('pagination')) :
                    pagination($the_query->max_num_pages, $paged);
                endif;
                wp_reset_postdata(); ?>
            </ul>
        </div>
    </div>
</main>
<?php get_footer(); ?>