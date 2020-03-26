<?php
/*
Template Name: 固定ページ用テンプレート
*/
?>
<?php get_header(); ?>
<main id="content" class="lower-page">
<div class="container">
<div class="<?php echo attribute_escape( $post->post_name ); ?>-content">
<?php
if(have_posts()): while(have_posts()): the_post();?>
<h2><?php the_title(); ?></h2>

<?php the_content(); ?>

<?php endwhile; endif; ?>
</div>
</div>
</main>
<?php get_footer(); ?>