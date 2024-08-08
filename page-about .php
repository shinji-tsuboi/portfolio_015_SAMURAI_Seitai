  <?php
  /*
  Template Name: About Page
  */
  ?>

  <?php get_header(); ?>

  <main id="main">
    <!-- メインビジュアル -->
    <div class="main-visual">
      <!-- PC用メインビジュアル -->
      <div class="main-img">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about/Frame 2573.png" alt="当院について">
      </div>
      <!-- SP用メインビジュアル -->
      <div class="main-img-sp">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top-img-sp/about-sp.png" alt="当院について">
      </div>
    </div>

    <!-- パンくずリスト -->
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <!-- コンセプト -->
    <section id="concept">
      <div class="container reverse">
        <div class="container-left">
          <h2><span><img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Head_01_Icon@3x.svg">Concept</span></h2>
          <h2 class="ja">特徴</h2>
          <h3>
            日々変化する<br>
            カラダと心を癒す<br>
            パーソナル<br>
            トレーナーとして
          </h3>
          <p>
            当院では、問診にてお客様の症状や生活スタイル、ご希望を丁寧にお伺いした上で施術方針を立てていきます。
          </p>
          <p>
            また、根本的に症状を改善するために、お客様ご自身で行えるケアやストレッチもお伝えします。
          </p>
          <p>
            ご不安な点や疑問点などお気軽にご相談くださいませ
          </p>
        </div>
        <div class="container-right">
          <div class="concept-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about/Group 2126.png" alt="施術">
          </div>
        </div>
      </div>
    </section>

    <!-- Flow -->
    <section id="flow">
      <div class="container reverse">
        <div class="container-left flow-left">
          <h2>
            <span>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Head_01_Icon@3x.svg">Flow
            </span>
          </h2>
          <h2 class="ja">施術の流れ</h2>
          <ol class="flow">
            <li>1. 受付</li>
            <li>2. 問診票のご記入</li>
            <li>3. カウンセリング</li>
            <li>4. 施術</li>
            <li>5. アフターカウンセリング</li>
          </ol>
        </div>
        <div class="container-right flow-right">
          <div class="concept-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about/Group 2127.png" alt="施術">
          </div>
        </div>
      </div>
    </section>

    <!-- point -->
    <section id="voice">
      <div class="section-title point-title">
        <h2 class="title-header">
          <span>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Head_02_DecoLeft16@3x.svg">
          </span>根本改善のポイント
          <span>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Head_02_DecoRight16@3x.svg">
          </span>
        </h2>
        <h2 class="title-text">
          お体の状態や生活習慣、ご要望を丁寧にお伺いします。
        </h2>
        <h2 class="title-text">
          ご自身でできるケアなども含めて施術方針をお作りします。
        </h2>
      </div>
      <div class="point">
        <div class="user-box">
          <img class="point-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about/Point1.png">
          <p class="point-content">丁寧なカウンセリング</p>
        </div>
        <div class="user-box">
          <img class="point-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about/Point2.png">
          <p class="point-content">徹底的分析</p>
        </div>
        <div class="user-box">
          <img class="point-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about/Point3.png">
          <p class="point-content">施術計画のご提案</p>
        </div>
      </div>
    </section>

    <!-- アクセス・営業時間 -->
    <?php get_template_part('template-parts/access'); ?>

    <?php get_footer(); ?>
