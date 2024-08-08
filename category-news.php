

  <?php get_header(); ?>

  <main id="main">
    <!-- メインビジュアル -->
    <div class="main-visual">
      <!-- PC用メインビジュアル -->
      <div class="main-img">
        <img src="images/news/Frame 2629.png" alt="当院について">
      </div>
      <!-- SP用メインビジュアル -->
      <div class="main-img-sp">
        <img src="images/top-img-sp/news-sp.png" alt="当院について">
      </div>
    </div>

    <!-- パンくずリスト -->
    <div class="breaderum">
      <ul class="page-map">
        <li class="page-map__top">
          <a href="top.html">ホーム</a>
        </li>
        <li class="page-map__news">
          <a href="news.html">
            <span>></span>
            お知らせ</a>
        </li>
      </ul>
    </div>

    <!-- Topic -->
    <section id="topic">
      <div class="topic-container">
        <div class="topic-left">
          <!-- 1 -->
          <?php if (have_posts()) : ?>
            <?php while(have_posts()) : the_post(); ?>
              <div class="topic-item">
                <div class="topic-img">
                  <a href="<?php the_permalink(); ?>">
                    <?php if (has_post_thumbnail()) : ?>
                      <?php the_post_thumbnail('full'); ?>
                    <?php else : ?>
                      <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/default-thumbnail.png" alt="<?php the_title_attribute(); ?>">
                    <?php endif; ?>
                  </a>
                </div>
                <div class="topic-content">
                  <a href="<?php the_permalink(); ?>">
                    <h3><?php the_title(); ?></h3>
                  </a>
                  <div class="business-hours">
                    <p class="date"><time><?php echo get_the_date(); ?></time></p>
                    <a class="date-btn" href="#access">営業日時</a>
                  </div>
                </div>
              </div>
            <?php endwhile; ?>
          <?php else : ?>
            <p>投稿が見つかりませんでした。</p>
          <?php endif; ?>
        </div>

        <div class="topic-right">
      <div class="category">
        <h3 class="category-title">カテゴリ</h3>
        <?php
          $categories = get_categories();
          foreach ($categories as $category) {
            echo '<p><a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a></p>';
          }
        ?>
      </div>
    </div>

        <!-- ページネーション -->
        <div class="pagination">
          <?php
            // ページネーションの表示
            echo paginate_links(array(
              'prev_text' => __('« 前へ'),
              'next_text' => __('次へ »'),
            ));
          ?>
        </div>
      </div>

    </section>



    <!-- アクセス・営業時間 -->
    <section id="access">
      <h2 class="title-header section-title"><span><img
            src="images/Head_02_DecoLeft16@3x.svg"></span>お気軽にご来院ください<span><img
            src="images/Head_02_DecoRight16@3x.svg"></span></h2>
      <div class="access">
        <div class="access-left">
          <h2>JR「秋葉原駅」より徒歩1分</h2>
          <ul class="adress">
            <li>〒101-0022</li>
            <li>東京都千代田区神田練塀町300番地</li>
            <li>住友不動産秋葉原駅前ビル 5F</li>
          </ul>
          <h2 class="tel"><span>tel:</span> 03-1234-5678</h2>
          <div class="table-container">
            <div class="tabele-wrap">
              <table class="opening-hours">
                <tr class="table">
                  <th>営業時間</th>
                  <th>月</th>
                  <th>火</th>
                  <th>水</th>
                  <th>木</th>
                  <th>金</th>
                  <th>土</th>
                  <th>日</th>
                </tr>
                <tr>
                  <td class="morning">9:00~12:30</td>
                  <td>⚫︎</td>
                  <td>⚫︎</td>
                  <td>-</td>
                  <td>⚫︎</td>
                  <td>⚫︎</td>
                  <td>⚫︎</td>
                  <td>⚫︎</td>
                </tr>
                <tr class="evening">
                  <td>15:30~20:00</td>
                  <td>⚫︎</td>
                  <td>⚫︎</td>
                  <td>-</td>
                  <td>⚫︎</td>
                  <td>⚫︎</td>
                  <td>⚫︎</td>
                  <td>⚫︎</td>
                </tr>
              </table>
            </div>
          </div>
          <a href="#contact.html" class="contact">ご予約・お問い合わせはこちらから</a>
        </div>
        <div class="access-right">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0688540195165!2d139.7746526!3d35.6999232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1719098262192!5m2!1sja!2sjp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>

    <?php get_footer(); ?>
