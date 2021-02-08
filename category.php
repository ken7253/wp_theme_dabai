<?php get_header(); ?>
<main id="category" class="lower-page">
  <div class="container">
    <div class="archive-content blog-list">
      <h2 class="archive-ttl-h2"><?php single_cat_title(); ?>記事一覧</h2>
      <ul class="flex-ard">
        <?php if (have_posts()) :
          if (function_exists('pagination')) :
            pagination($wp_query->max_num_pages, get_query_var('paged'));
          endif;
          while (have_posts()) : the_post(); ?>
            <li>
              <a class="post-container flex" href="<?php the_permalink(); ?>">
                <div class="thumbnail">
                  <?php if (has_post_thumbnail()) {
                    the_post_thumbnail(array(300, 300));
                  } else {
                    echo '<img src="' . get_stylesheet_directory_uri() . '/img/common/thumbnail-dummy.svg" alt="サムネイルなし">';
                  } ?>
                </div>
                <div class="post">
                  <span class="post-title 
                  <?php
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
          if (function_exists('pagination')) :
            pagination($wp_query->max_num_pages, get_query_var('paged'));
          endif;
        else :
          echo 'まだ記事がありません';
        endif; ?>
      </ul>
    </div>
  </div>
</main>
<?php get_footer(); ?>