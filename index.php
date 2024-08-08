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

  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="responsive.css">

  <title>SAMURAI整体院</title>
</head>

<body>
  <header id="header">
    <h1 class="header-logo">
      <a href="top.html">
        <img class="logo-pc" src="images/header-logo.png" alt="SAMURAI整体院">
        <img class="logo-sp" src="images/menu-sp/logo-sp.svg" alt="SAMURAI整体院">
      </a>
    </h1>
    <!-- PC用ナビゲーション -->
    <nav class="header-nav">
      <ul class="nav-list">
        <li><a href="top.html">ホーム</a></li>
        <li><a href="about.html">当院について</a></li>
        <li><a href="course.html">コース・料金</a></li>
        <li><a href="news.html">お知らせ</a></li>
        <li><a href="voice.html">お客様の声</a></li>
        <li class="nav-btn">
          <a href="contact.html">ご予約・お問い合わせ</a>
        </li>
      </ul>
    </nav>
  </header>

  <!-- スマホ用メニューボタン -->
  <img id="menu-sp" src="images/menu-sp/open.svg" alt="ナビゲーション">

  <!-- スマホ用ナビゲーション -->
  <nav id="nav-sp">
    <div class="nav-sp-header">
      <div id="logo-sp">
        <img src="images/menu-sp/logo-sp.svg" alt="ロゴ">
      </div>
      <div id="close">
        <img src="images/menu-sp/close.svg" alt="閉じる">
      </div>
    </div>
    <div class="nav-sp-list">
      <div class="nav-sp-list-inner">
        <h3>メニュー</h3>
        <ul>
          <li><a href="top.html">ホーム</a></li>
          <li><a href="about.html">当院について</a></li>
          <li><a href="course.html">コース・料金</a></li>
          <li><a href="news.html">お知らせ</a></li>
          <li><a href="voice.html">お客様の声</a></li>
          <li class="nav-btn"><a href="contact.html">ご予約・お問い合わせ</a></li>
        </ul>
      </div>
    </div>
  </nav>

  <!-- グレーアウトオーバーレイ -->
  <div id="overlay"></div>



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
          <img src="images/top/Top-image1.png" alt="整体院">
        </div>
        <div class="carousel-item">
          <img src="images/top/Top-image2.png" alt="待合室">
        </div>
        <div class="carousel-item">
          <img src="images/top/Top-image3.png" alt="施術">
        </div>
        <div class="carousel-item">
          <img src="images/top/Top-image4.png" alt="診察室">
        </div>
      </div>

      <!-- SPスライダー -->
      <div class="top-carousel-sp">
        <div class="top-carousel-sp-item">
          <img src="images/top-img-sp/top-sp-1.png" alt="整体院">
        </div>
        <div class="top-carousel-sp-item">
          <img src="images/top-img-sp/top-sp-2.png" alt="待合室">
        </div>
        <div class="top-carousel-sp-item">
          <img src="images/top-img-sp/top-sp-3.png" alt="施術">
        </div>
        <div class="top-carousel-sp-item">
          <img src="images/top-img-sp/top-sp-4.png" alt="診察室">
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
        <div class="news-box">
          <div class="business-hours-top">
            <p class="date">
              <time>2024/06/22</time>
            </p>
            <a class="date-btn" href="#">営業日時</a>
          </div>
          <div class="info-text">
            <p>年末年始の営業時間について</p>
          </div>
        </div>
        <div class="info-list">
          <a href="news.html">→ お知らせ一覧へ</a>
        </div>
      </div>
    </div>

    <!-- コンセプト -->
    <section id="concept">
      <div class="container reverse">
        <div class="container-left">
          <h2>
            <span>
              <img src="images/Head_01_Icon@3x.svg">Concept
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
            <a href="about.html">→ 当院について</a>
          </div>
        </div>
        <div class="container-right">
          <div class="concept-img">
            <img src="images/about/Group 2126.png" alt="施術">
          </div>
        </div>
      </div>
    </section>

    <!-- コース・料金 -->
    <section id="course">
      <div class="section-title">
        <h2 class="title-header">
          <span>
            <img src="images/Head_02_DecoLeft16@3x.svg">
          </span>コース・料金
          <span>
            <img src="images/Head_02_DecoRight16@3x.svg">
          </span>
        </h2>
        <h2 class="title-text">当院では保険診療、自費診療ともに<br>
          ご対応しております
        </h2>
      </div>
      <div class="container column">
        <div class="insurance">
          <img class="course-img" src="images/top/TOP-insurance1.png" alt="保険診療">
          <h4>保険診療</h4>
          <ul>
            <li>・骨折・打撲・捻挫・脱臼</li>
            <li>・スポーツ診療</li>
            <li>・交通事故</li>
          </ul>
        </div>
        <div class="self">
          <img class="course-img" src="images/top/TOP-self1.png" alt="自費診療">
          <h4>自費診療</h4>
          <ul>
            <li>・腰痛・肩こり</li>
            <li>・冷え性・だるさ</li>
            <li>・骨盤・背骨矯正</li>
          </ul>
        </div>
      </div>
      <div class="course-btn">
        <a href="course.html" class="btn">→ コース・料金詳細へ</a>
      </div>
    </section>

    <!-- お客様の声 -->
    <section id="voice">
      <!-- PC用スライダー -->
      <div class="bottom-carousel">
        <div>
          <img src="images/top/Bottom-Carouselgroup1.png" alt="#">
        </div>
        <div>
          <img src="images/top/Bottom-Carouselgroup2.png" alt="#">
        </div>
        <div>
          <img src="images/top/Bottom-Carouselgroup3.png" alt="#">
        </div>
      </div>
      <!-- SP用スライダー -->
      <div class="bottom-carousel-sp">
        <div>
          <img src="images/top-sp/SP-Bottom-Carouselgroup1.png" alt="#">
        </div>
        <div>
          <img src="images/top-sp/SP-Bottom-Carouselgroup2.png" alt="#">
        </div>
        <div>
          <img src="images/top-sp/SP-Bottom-Carouselgroup3.png" alt="#">
        </div>
      </div>
      <div class="semicircle">
        <div class="section-title voice-title">
          <h2 class="title-header">
            <span>
              <img src="images/Head_02_DecoLeft16@3x.svg">
            </span>お客様の声
            <span>
              <img src="images/Head_02_DecoRight16@3x.svg"></span>
          </h2>
          <h2 class="title-text">
            痛みの改善に加えて自分で予防も<br>できるようになりました
          </h2>
        </div>
      </div>
      <div class="user">
        <div class="user-box">
          <img src="images/voice/TOP-user1.png" class="circle">
          <h3>S・K様 30代女性</h3>
          <p>
            マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。
          </p>
        </div>
        <div class="user-box">
          <img src="images/voice/TOP-user2.png" class="circle">
          <h3>T・M様 40代男性</h3>
          <p>
            マラソンで右膝が痛むので、施術を受けています。なぜ痛みが生じるのかを身体の仕組みから教えていただき、普段の練習メニューも工夫できています。
          </p>
        </div>
        <div class="user-box">
          <img src="images/voice/TOP-user3.png" class="circle">
          <h3>S・T様 60代女性</h3>
          <p>
            転倒して足を骨折したのをきっかけに、痛みの軽減と筋肉の衰えを防ぐための方針を立てていただいています。今は毎日元気に近所を散歩できています。
          </p>
        </div>
      </div>
      <div class="voice-btn">
        <a href="voice.html" class="btn">→ お客様の声一覧へ</a>
      </div>
    </section>

    <!-- アクセス・営業時間 -->
    <section id="access">
      <h2 class="title-header section-title">
        <span>
          <img src="images/Head_02_DecoLeft16@3x.svg">
        </span>お気軽にご来院ください
        <span>
          <img src="images/Head_02_DecoRight16@3x.svg">
        </span>
      </h2>
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
          <a href="contact.html" class="contact">
            ご予約・お問い合わせはこちらから
          </a>
        </div>
        <div class="access-right">
          <iframe
            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3240.0688540195165!2d139.7746526!3d35.6999232!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60188fee13660e23%3A0x77137876edf742ac!2z5L2P5Y-L5LiN5YuV55Sj56eL6JGJ5Y6f6aeF5YmN44OT44Or!5e0!3m2!1sja!2sjp!4v1719098262192!5m2!1sja!2sjp"
            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
            referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </section>
  </main>

  <footer id="footer">
    <div class="footer-inner">
      <h1 class="footer-logo">
        <a href="#top">
          <img src="images/header-logo.png" alt="SAMURAI整体院">
        </a>
      </h1>
      <nav class="footer-nav">
        <ul class="footer-list">
          <li><a href="top.html">TOP</a></li>
          <li><a href="concept.html">当院について</a></li>
          <li><a href="course.html">コース・料金</a></li>
          <li><a href="news.html">お知らせ</a></li>
          <li><a href="voice.html">お客様の声</a></li>
          <li><a href="contact.html">ご予約・お問い合わせ</a></li>
        </ul>
      </nav>
    </div>
    <p class="copyright">&copy; 2023 SAMURAI整体院</p>
  </footer>

  <!-- TOPページへ戻るボタン -->
  <a href="#main" id="page-top">
    <img src="images/btn_01.png">
  </a>

  <!-- jquery -->
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
  <!-- js -->
  <script src="script.js"></script>
</body>

</html>