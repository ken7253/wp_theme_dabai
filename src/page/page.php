<?php
/*
Template Name: 固定ページ用テンプレート
*/ ?>
<?php get_header(); ?>
<main id="content" class="lower-page">
  <div class="container">
    <div class="ttl-horizon">
      <h2 class="lower-ttl-h2"><span><?php echo esc_attr($post->post_name); ?></span><br><?php the_title(); ?></h2>
    </div>
    <div class="<?php echo attribute_escape($post->post_name); ?>-content">
      <?php
      if (have_posts()) : while (have_posts()) : the_post(); ?>

          <?php the_content(); ?>

      <?php endwhile;
      endif; ?>
    </div>
  </div>
</main>
<?php get_footer(); ?>