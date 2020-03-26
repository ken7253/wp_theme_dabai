<?php get_header(); ?>
<main id="category" class="lower-page">
    <div class="container">
        <div class="archive-content blog-list">
            <h2 class="archive-ttl-h2"><?php single_cat_title(); ?>記事一覧</h2>
            <ul class="flex-ard">
                <?php while (have_posts()) : the_post(); ?>
                <li id="post-<?php the_ID(); ?>" <?php post_class(); ?> >
                    <a class="post-container flex" href="<?php the_permalink(); ?>">
                    <div class="thumbnail">
                                    <?php if (has_post_thumbnail()) {
                                        the_post_thumbnail(array(300, 300));
                                    } else {
                                        echo '<img src="' . get_stylesheet_directory_uri() . '/img/common/thumbnail-dummy.png" alt="サムネイルなし">';
                                    } ?>
                    </div>
                    </a>
                </li>
                <?php 
                endwhile;
                if(function_exists('wp_page_numbers')) : wp_page_numbers(); endif;
                ?>
            <?//php (function_exists('pagination')) : pagination($the_query->max_num_pages, $paged); ?>
            </ul>
        </div>
    </div>
</main>
<?php get_footer(); ?>