<?php get_header(); ?>
<main id="content">
  <section id="mv">
    <div class="container"></div>
  </section>
  <section id="about">
    <div class="container flex-wrp-btw">
      <h2 class="common-ttl-h2">About</h2>
      <div class="about-description">
        <p>
          こんにちはダバイ治といいます。<br>
          過去にはDota2,OW,CSGO,PUBG,フォートナイトなど、主にシューティングを中心にプレイしていました。<br>
          Escape From Tarkovはver0.8の頃からプレイしています。
        </p>
        <p>
          毎日ゲームしたり本読んだり、だいたい引きこもりのプロ。<br>
          配信スケジュール（Stream Schedule）<br>
          だいたい夕方前後
        </p>
        <a aria-label="自己紹介ページへ" title="自己紹介ページへ" class="readmore-btn" href="<?php echo esc_url(home_url('/')); ?>about">read more</a>
      </div>
      <div class="about-twitchtv">
        <h3 class="common-ttl-h3">Twitch - dabaiosamu</h3>
        <div class="twitchtv">
          <iframe loading="lazy" src="https://player.twitch.tv/?channel=dabaiosamu&parent=dabaiosamu.com" title="Twitchページ" frameborder="0" allowfullscreen="true" scrolling="no" height="378" width="620"></iframe>
        </div>
      </div>
    </div>
  </section>
  <section id="blog">
    <div class="container">
      <h2 class="common-ttl-h2">Blog</h2>
      <div class="blog-list">
        <?php if (have_posts()) : ?>
          <ul class="flex-ard">
            <!-- loop START -->
            <?php
            $args = array(
              'posts_per_page' => 5,
              'orderby' => 'date',
            );
            $the_query = new WP_Query($args);
            while ($the_query->have_posts()) : $the_query->the_post();
            ?>
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
                    <span class="post-title <?php
                                            $days = 7;
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
            <?php endwhile;
            wp_reset_postdata(); ?>
          </ul>
        <?php else : ?>
          <p>投稿はありません</p>
        <?php endif; ?>
        <!-- loop END -->
      </div>
      <div class="readmore">
        <a aria-label="記事一覧ページへ" title="記事一覧ページへ" class="readmore-btn" href="<?php echo esc_url(home_url('/')); ?>archive">read more</a>
      </div>
    </div>
  </section>
  <section id="video">
    <div class="container">
      <div id="videoList">
        <h2 class="common-ttl-h2">Videos</h2>
        <div v-if="errored">
          <p>最新動画一覧のデータを取得できませんでした。</p>
        </div>
        <div v-else>
          <div v-if="loading">Loading...</div>
          <div v-else class="video-over-container">
            <hooper :settings="{
                            itemsToShow: 3,
                            shortDrag: false,
                            infiniteScroll: true,
                            wheelControl: false,
                            autoPlay: true,
                            playSpeed: 3000,
                            transition: 1000
                            }">
              <slide v-for="video in videos" :key="video.Id">
                <a v-bind:href=" 'https://www.youtube.com/watch?v=' + video.snippet.resourceId.videoId" target="_blank" rel="noopener">
                  <img v-bind:src="video.snippet.thumbnails.high.url" v-bind:alt="video.snippet.title">
                </a>
              </slide>
            </hooper>
          </div>
        </div>
      </div>
    </div>
  </section>
  <section id="contact">
    <div class="container">
      <h2 class="common-ttl-h2">Contact</h2>
      <?php echo do_shortcode('[contact-form-7 id="85" title="お問い合わせ"]'); ?>
    </div>
  </section>
</main>
<?php get_footer(); ?>