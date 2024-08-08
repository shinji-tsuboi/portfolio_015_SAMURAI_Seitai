<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="模写コーディング上級編">
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <!-- Add the slick-theme.css if you want default styling -->
  <link rel="stylesheet" type="text/css"
    href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css" />
  <!-- reset.css ress -->
  <link rel="stylesheet" href="https://unpkg.com/ress/dist/ress.min.css" />
  <!-- Google Fonts -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap">

  <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css">

  <title>SAMURAI整体院</title>
  <?php wp_head(); ?>
</head>

<body class="subpage">
  <header id="header">
    <h1 class="header-logo">
      <a href="<?php echo esc_url(home_url('/')); ?>">
        <img class="logo-pc" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/header-logo.png" alt="SAMURAI整体院">
        <img class="logo-sp" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/menu-sp/logo-sp.svg" alt="SAMURAI整体院">
      </a>
    </h1>
    <!-- PC用ナビゲーション -->
    <nav class="header-nav">
      <ul class="nav-list">
        <li><a href="<?php echo esc_url(home_url('/')); ?>">ホーム</a></li>
        <li><a href="<?php echo esc_url(home_url('/about')); ?>">当院について</a></li>
        <li><a href="<?php echo esc_url(home_url('/course')); ?>">コース・料金</a></li>
        <li><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
        <li><a href="<?php echo esc_url(home_url('/voice')); ?>">お客様の声</a></li>
        <li class="nav-btn">
          <a href="<?php echo esc_url(home_url('/contact')); ?>">ご予約・お問い合わせ</a>
        </li>
      </ul>
    </nav>
  </header>

  <!-- スマホ用メニューボタン -->
  <img id="menu-sp" src="<?php echo esc_url(get_template_directory_uri()); ?>/images/menu-sp/open.svg" alt="ナビゲーション">

  <!-- スマホ用ナビゲーション -->
  <nav id="nav-sp">
    <div class="nav-sp-header">
      <div id="logo-sp">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/menu-sp/logo-sp.svg" alt="ロゴ">
      </div>
      <div id="close">
        <img src="<?php echo esc_url(get_template_directory_uri()); ?>/images/menu-sp/close.svg" alt="閉じる">
      </div>
    </div>
    <div class="nav-sp-list">
      <div class="nav-sp-list-inner">
        <h3>メニュー</h3>
        <ul>
          <li><a href="<?php echo esc_url(home_url('/top')); ?>">ホーム</a></li>
          <li><a href="<?php echo esc_url(home_url('/about')); ?>">当院について</a></li>
          <li><a href="<?php echo esc_url(home_url('/course')); ?>">コース・料金</a></li>
          <li><a href="<?php echo esc_url(home_url('/news')); ?>">お知らせ</a></li>
          <li><a href="<?php echo esc_url(home_url('/voice')); ?>">お客様の声</a></li>
          <li class="nav-btn"><a href="<?php echo esc_url(home_url('/contact')); ?>">ご予約・お問い合わせ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- グレーアウトオーバーレイ -->
  <div id="overlay"></div>
