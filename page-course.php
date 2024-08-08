
<?php
/*
Template Name: Course Page
*/
?>

<?php get_header(); ?>

<main id="main">
    <!-- メインビジュアル -->
    <div class="main-visual">
      <!-- PC用メインビジュアル -->
      <div class="main-img">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/price/Frame 2627.png" alt="当院について">
      </div>
      <!-- SP用メインビジュアル -->
      <div class="main-img-sp">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top-img-sp/price-sp.png" alt="当院について">
      </div>
    </div>

    <!-- パンくずリスト -->
    <?php get_template_part('template-parts/breadcrumb'); ?>

    <!-- コース・料金 -->
    <section id="price">
      <div class="section-title price-title">
        <h2 class="title-header">
          <span>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Head_02_DecoLeft16@3x.svg">
          </span>コース・料金
          <span>
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Head_02_DecoRight16@3x.svg">
          </span>
        </h2>
        <h2 class="title-text">当院では保険診療、自費診療ともに<br>ご対応しております</h2>
      </div>
      <div class="price-container">
        <div class="insurance">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/TOP-insurance1.png" alt="保険診療" class="course-img">
          <h4>保険診療</h4>
          <ul>
            <li>・骨折・打撲・捻挫・脱臼</li>
            <li>・スポーツ診療</li>
            <li>・交通事故</li>
          </ul>
        </div>
        <div class="self">
          <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/top/TOP-self1.png" alt="自費診療" class="course-img">
          <h4>自費診療</h4>
          <ul>
            <li>・腰痛・肩こり</li>
            <li>・冷え性・だるさ</li>
            <li>・骨盤・背骨矯正</li>
          </ul>
        </div>
      </div>
    </section>

    <!-- Insurance -->
    <section id="insurance">
      <div class="container reverse insurance-item">
        <div class="container-left">
          <div class="insurance-title">
            <h2>
              <span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Head_01_Icon@3x.svg">Insurance
              </span>
            </h2>
            <h2 class="ja">保険診療</h2>
          </div>
          <div class="insurance-content">
            <p class="pc-only">
              健康保険の適用は、慢性化していない、急性のけがのみが対象となります。<br>
              「負傷原因が急性または亜急性（急性に準ずる）の外傷性の負傷」のみです。
            </p>
            <ul>
              <li>・骨折・打撲・脱臼</li>
              <li>・スポーツ診療</li>
              <li>・交通事故</li>
            </ul>
          </div>
        </div>
        <div class="container-right">
          <div class="insurance-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/price/Frame 2275.png" alt=”保険診療”>
          </div>
        </div>
      </div>
    </section>

    <!-- Self-pay -->
    <section id="insurance">
      <div class="container reverse insurance-item">
        <div class="container-left">
          <div class="insurance-title">
            <h2>
              <span>
                <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/Head_01_Icon@3x.svg">Self-pay
              </span>
            </h2>
            <h2 class="ja">自費診療</h2>
          </div>
          <div class="insurance-content">
            <p class="pc-only">
              慢性的なご症状、日常生活の疲労やご年齢により生じる痛み緩和の施術は健康保険の適用がなく、全額自己負担となります。
            </p>
            <ul>
              <li>・腰痛・肩こり</li>
              <li>・冷え性・だるさ</li>
              <li>・骨盤・背骨矯正</li>
            </ul>
            <p>初回 8,800円（税込）/ 50分
              <br>2回目 6,600円（税込） / 30分
            </p>
          </div>
        </div>
        <div class="container-right">
          <div class="insurance-img">
            <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/price/Frame 2275 (1).png" alt=”自費診療”>
          </div>
        </div>
      </div>
    </section>



    <!-- アクセス・営業時間 -->
    <?php get_template_part('template-parts/access'); ?>

    <?php get_footer(); ?>
