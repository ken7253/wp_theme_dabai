<?php
// サムネイル有効化
add_theme_support('post-thumbnails');
// html5タグ用
add_theme_support('html5', array(
  'search-form',
  'comment-form',
  'comment-list',
  'gallery',
  'caption',
));
// jQueryの読み込みをGoogleCDNに変更 -> Header
add_action('wp_enqueue_scripts', function () {
  if (is_admin() === false) {
    wp_deregister_script('jquery');
    wp_register_script('jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js', false, '3.4.1', false);
    wp_enqueue_script('jquery');
  }
});
// バージョン情報削除
remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'rsd_link');
// フィード削除
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);
// 絵文字削除
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');

// ページャー表示用
function pagination($pages, $paged, $range = 2, $show_only = false)
{

  $pages = (int) $pages;
  $paged = $paged ?: 1;

  //表示テキスト
  $text_first   = "«";
  $text_before  = "‹";
  $text_next    = "›";
  $text_last    = "»";

  if ($show_only && $pages === 1) {
    echo '<div class="pagination"><span class="current pager">1</span></div>';
    return;
  }

  if ($pages === 1) return;

  if (1 !== $pages) {
    echo '<div class="pagination"><span class="page_num">Page ', $paged, ' of ', $pages, '</span>';
    if ($paged > $range + 1) {
      echo '<a href="', get_pagenum_link(1), '" class="first">', $text_first, '</a>';
    }
    if ($paged > 1) {
      echo '<a href="', get_pagenum_link($paged - 1), '" class="prev">', $text_before, '</a>';
    }
    for ($i = 1; $i <= $pages; $i++) {

      if ($i <= $paged + $range && $i >= $paged - $range) {
        if ($paged === $i) {
          echo '<span class="current pager">', $i, '</span>';
        } else {
          echo '<a href="', get_pagenum_link($i), '" class="pager">', $i, '</a>';
        }
      }
    }
    if ($paged < $pages) {
      echo '<a href="', get_pagenum_link($paged + 1), '" class="next">', $text_next, '</a>';
    }
    if ($paged + $range < $pages) {
      echo '<a href="', get_pagenum_link($pages), '" class="last">', $text_last, '</a>';
    }
    echo '</div>';
  }
}

// 抜粋表示と調整
add_post_type_support('page', 'excerpt');
remove_filter('the_excerpt', 'wpautop');
remove_filter('term_description', 'wpautop');

add_action('wp_footer', 'add_thanks_page');
function add_thanks_page()
{
  echo <<< EOD
<script>
document.addEventListener( 'wpcf7mailsent', function( event ) {
  location = 'https://dabaiosamu.com/thanks/'; 
}, false );
</script>
EOD;
}
