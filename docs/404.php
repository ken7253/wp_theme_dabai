<?php get_header(); ?>
<main id="notfound" class="lower-page">
  <div class="container">
    <div class="notfound-content">
      <h2>
        <span class="notfound-404">Error:404</span><br>
        Not Found<span>(ページが見つかりませんでした)</span>
      </h2>
      <p>指定された以下のページは存在しないか、または移動した可能性があります。</p>
      <p class="error_url">URL ：<span><?php echo get_pagenum_link(); ?></span></p>
      <p><a href="<?php echo home_url(); ?>">トップページへ</a></p>
    </div>
  </div>
</main>
<?php get_footer(); ?>