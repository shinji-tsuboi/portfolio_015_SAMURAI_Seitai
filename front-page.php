<?php get_header(); ?>

  <main id="main">
    <!-- メインビジュアル -->
    <div class="main-visual">
      <div class="top-text">
        <p>
          <span class=line>根本的な症状改善を</span><br>
          <span class="line">サポートします</span>
        </p>
      </div>
      <!-- PCスライダー -->
      <div class="top-carousel">
        <div class="carousel-item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/Top-image1.png" alt="整体院">
        </div>
        <div class="carousel-item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/Top-image2.png" alt="待合室">
        </div>
        <div class="carousel-item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/Top-image3.png" alt="施術">
        </div>
        <div class="carousel-item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/Top-image4.png" alt="診察室">
        </div>
      </div>

      <!-- SPスライダー -->
      <div class="top-carousel-sp">
        <div class="top-carousel-sp-item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top-img-sp/top-sp-1.png" alt="整体院">
        </div>
        <div class="top-carousel-sp-item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top-img-sp/top-sp-2.png" alt="待合室">
        </div>
        <div class="top-carousel-sp-item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top-img-sp/top-sp-3.png" alt="施術">
        </div>
        <div class="top-carousel-sp-item">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top-img-sp/top-sp-4.png" alt="診察室">
        </div>
      </div>
      <!-- プログレスバー -->
      <div class="progress-bar">
        <div class="bar" id="js-progressBar"></div>
      </div>
    </div>

    <!-- お知らせ -->
    <div id="information">
      <div class="info">
        <div class="news">
          <p class="news-title">News</p>
          <p class="news-item">お知らせ</p>
        </div>
        <?php
          $args = array( //取得したい投稿記事などの条件を引数として渡す
            'post_type' => 'post',       //投稿タイプ:post
            'category_name' => 'news',   //カテゴリー名:news
            'posts_per_page' => 1,       //1ページの投稿表示数
          );

          $posts = get_posts($args);     //データの取得
        ?>
        <!-- ループ処理 -->
        <?php foreach($posts as $post): ?>
        <?php setup_postdata($post); ?>

        <div class="news-box">
          <div class="business-hours-top">
            <div class="date">
              <!-- aタグで投稿記事へのリンクを作成 -->
              <a href="<?php echo get_permalink(); ?>">
                <!-- 日付を出力する -->
                <?php echo get_the_date(); ?>
              </a>
            </div>
            <div>
              <a class="date-btn" href="#">営業日時</a>
            </div>
          </div>
          <div class="info-text">
             <!--  aタグで投稿記事へのリンクを作成する -->
             <a href="<?php the_permalink(); ?>">
              <!--  投稿記事のタイトルを表示する -->
              <?php the_title(); ?>
             </a>
          </div>
        </div>

        <?php endforeach; ?>
        <!-- 使用した投稿データをリセット -->
        <?php wp_reset_postdata(); ?>

        <div class="info-list">
          <a href="<?php echo esc_url(home_url('/template-parts/news-list')); ?>">→ お知らせ一覧へ</a>
        </div>
      </div>
    </div>

    <!-- コンセプト -->
    <section id="concept">
      <div class="container reverse">
        <div class="container-left">
          <h2>
            <span>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Head_01_Icon@3x.svg">Concept
            </span>
          </h2>
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
          <div class="btn c-btn">
            <a href="<?php echo esc_url(home_url('/about')); ?>">→ 当院について</a>
          </div>
        </div>
        <div class="container-right">
          <div class="concept-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/about/Group 2126.png" alt="施術">
          </div>
        </div>
      </div>
    </section>

    <!-- コース・料金 -->
    <section id="course">
      <div class="section-title">
        <h2 class="title-header">
          <span>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Head_02_DecoLeft16@3x.svg">
          </span>コース・料金
          <span>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Head_02_DecoRight16@3x.svg">
          </span>
        </h2>
        <h2 class="title-text">当院では保険診療、自費診療ともに<br>
          ご対応しております
        </h2>
      </div>
      <div class="container column">
        <div class="insurance">
          <img class="course-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/TOP-insurance1.png" alt="保険診療">
          <h4>保険診療</h4>
          <ul>
            <li>・骨折・打撲・捻挫・脱臼</li>
            <li>・スポーツ診療</li>
            <li>・交通事故</li>
          </ul>
        </div>
        <div class="self">
          <img class="course-img" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/TOP-self1.png" alt="自費診療">
          <h4>自費診療</h4>
          <ul>
            <li>・腰痛・肩こり</li>
            <li>・冷え性・だるさ</li>
            <li>・骨盤・背骨矯正</li>
          </ul>
        </div>
      </div>
      <div class="course-btn">
        <a href="<?php echo esc_url(home_url('/course')); ?>" class="btn">→ コース・料金詳細へ</a>
      </div>
    </section>

    <!-- お客様の声 -->
    <section id="voice">
      <!-- PC用スライダー -->
      <div class="bottom-carousel">
        <div>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/Bottom-Carouselgroup1.png" alt="#">
        </div>
        <div>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/Bottom-Carouselgroup2.png" alt="#">
        </div>
        <div>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/Bottom-Carouselgroup3.png" alt="#">
        </div>
      </div>
      <!-- SP用スライダー -->
      <div class="bottom-carousel-sp">
        <div>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top-sp/SP-Bottom-Carouselgroup1.png" alt="#">
        </div>
        <div>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top-sp/SP-Bottom-Carouselgroup2.png" alt="#">
        </div>
        <div>
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top-sp/SP-Bottom-Carouselgroup3.png" alt="#">
        </div>
      </div>
      <div class="semicircle">
        <div class="section-title voice-title">
          <h2 class="title-header">
            <span>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Head_02_DecoLeft16@3x.svg">
            </span>お客様の声
            <span>
              <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Head_02_DecoRight16@3x.svg"></span>
          </h2>
          <h2 class="title-text">
            痛みの改善に加えて自分で予防も<br>できるようになりました
          </h2>
        </div>
      </div>
      <div class="user">
        <div class="user-box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/voice/TOP-user1.png" class="circle">
          <h3>S・K様 30代女性</h3>
          <p>
            マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。
          </p>
        </div>
        <div class="user-box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/voice/TOP-user2.png" class="circle">
          <h3>T・M様 40代男性</h3>
          <p>
            マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。
          </p>
        </div>
        <div class="user-box">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/voice/TOP-user3.png" class="circle">
          <h3>S・T様 60代女性</h3>
          <p>
            転倒して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。今は毎日元気に近所を散歩できています。
          </p>
        </div>
      </div>
      <div class="voice-btn">
        <a href="<?php echo esc_url(home_url('/voice')); ?>" class="btn">→ お客様の声一覧へ</a>
      </div>
    </section>

    <!-- アクセス・営業時間 -->
    <?php get_template_part('template-parts/access'); ?>
  </main>

  <?php get_footer(); ?>
