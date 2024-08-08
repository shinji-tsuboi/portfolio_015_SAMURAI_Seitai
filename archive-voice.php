  <?php get_header(); ?>

  <main id="main">
    <!-- メインビジュアル -->
    <div class="main-visual">
      <!-- PC用メインビジュアル -->
      <div class="main-img">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/voice/Frame 2621.png" alt="当院について">
      </div>
      <!-- SP用メインビジュアル -->
      <div class="main-img-sp">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top-img-sp/voice-sp.png" alt="当院について">
      </div>
    </div>

    <!-- パンくずリスト -->
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <!-- お客様の声一覧 -->
    <section id="voice-list">
      <div class="voice-list-inner">

        <?php if(have_posts()) : ?>
          <?php while (have_posts()) : the_post() ?>
            <div class="voice-list-item">
              <div class="voice-list-inner-left">
                <div class="voice-list-img">
                  <?php the_post_thumbnail(); ?>
                </div>
              </div>
              <div class="voice-list-inner-right">
                <div class="voice-list-text">
                  <h3 class="user-name">
                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                  </h3>
                  <p class="user-coment">
                    <?php echo wp_trim_words(get_the_content(), 150, '...'); ?>
                  </p>
                </div>
              </div>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>

      <!-- ページネーション -->
      <div class="pagination page-number">
        <?php
          echo paginate_links(array(
            'total' => $wp_query->max_num_pages,
            'prev_text' => '',
            'next_text' => '',
          ));
        ?>
      </div>
    </section>


    <!-- アクセス・営業時間 -->
    <?php get_template_part('template-parts/access'); ?>

    <?php get_footer(); ?>
