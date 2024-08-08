<footer id="footer">
    <div class="footer-inner">
      <h1 class="footer-logo">
        <a href="<?php echo esc_url(home_url('/')); ?>">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/header-logo.png" alt="SAMURAI整体院">
        </a>
      </h1>
      <nav class="footer-nav">
        <ul class="footer-list">
          <li><a href="<?php echo esc_url(home_url('/')); ?>">TOP</a></li>
          <li><a href="<?php echo esc_url(home_url('/about')); ?>">当院について</a></li>
          <li><a href="<?php echo esc_url(home_url('/course')); ?>">コース・料金</a></li>
          <li><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
          <li><a href="<?php echo esc_url(home_url('/voice')); ?>">お客様の声</a></li>
          <li><a href="<?php echo esc_url(home_url('contact')); ?>">ご予約・お問い合わせ</a></li>
        </ul>
      </nav>
    </div>
    <p class="copyright">&copy; 2023 SAMURAI整体院</p>
  </footer>

  <!-- TOPへ戻るボタン -->
  <a href="#" id="page-top">
    <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/btn_01.png">
  </a>

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- js -->
  <script src="script.js"></script>

  <?php wp_footer(); ?>
</body>

</html>
