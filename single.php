<?php get_header(); ?>
<article id="post" class="lower-page">
    <div class="container">
        <div class="post-content">
            <?php if (have_posts()) : while (have_posts()) : the_post(); ?>
                    <h2><?php echo get_the_title( $ID ); ?></h2>
                    <time datetime="<?php the_time('Y-m-d'); ?>"><?php the_time('Y.m.d'); ?></time>
                    <p><?php the_category(', '); ?></p>
                    <p><?php the_content('Read more'); ?></p>

            <?php endwhile; endif; ?>
            <?php previous_post_link('%link', '古い記事へ'); ?>
            <?php next_post_link('%link', '新しい記事へ'); ?>
        </div>
    </div>
</article>
<?php get_footer(); ?>