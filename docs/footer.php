<footer>
  <nav class="social-nav">
    <ul>
      <li><a aria-label="Twitchチャンネルページへ" href="https://www.twitch.tv/dabaiosamu" target="_blank" rel="noopener">
          <i class="fab fa-twitch"></i></a></li>
      <li><a aria-label="YouTubeチャンネルページへ" href="https://www.youtube.com/channel/UCNetO5A5Uc-Dk9wUnqm_PFw" target="_blank" rel="noopener">
          <i class="fab fa-youtube"></i></a></li>
      <li><a aria-label="サイトTOPへ" href="<?php echo esc_url(home_url('/')) ?>">
          <i class="fas fa-home"></i></a></li>
      <li><a aria-label="Twitterへ" href="https://twitter.com/dabaiosamu" target="_blank" rel="noopener">
          <i class="fab fa-twitter"></i></a></li>
      <li><a aria-label="Discordサーバーへ" href="https://discordapp.com/invite/f94tp3Y" target="_blank" rel="noopener">
          <i class="fab fa-discord"></i></a></li>
    </ul>
  </nav>
  <div class="copyright">
    <p>&copy; dabaiosamu <span id="yearNow">{{ year }}</span></p>
  </div>
</footer>
<!-- vue.js -->
<script src="<?php echo get_stylesheet_directory_uri(); ?>/js/v-script.js"></script>
<?php wp_footer(); ?>
</body>

</html>