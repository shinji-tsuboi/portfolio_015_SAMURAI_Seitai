
// スライダー設定
$(function() {
  $('.top-carousel, .top-carousel-sp').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 1500,
    fade: true,
    dots: false,
    arrows: false,
    infinite: true,
  });
  // プログレスバー設定

  // スライドが切り替わるたびにプログレスバーをリセット
  $('.top-carousel').on('beforeChange', function(event, slick, currentSlide, nextSlide) {
    $('#js-progressBar').stop(true, true).css('width', '0%');
  });

  // スライドが開始されたらプログレスバーをアニメーション
  $('.top-carousel').on('afterChange', function(event, slick, currentSlide) {
    $('#js-progressBar').animate({ width: '100%' }, 5000, 'linear');
  });

  // 初回スライドの開始時にプログレスバーをアニメーション
  $('#js-progressBar').animate({ width: '100%'}, 5000, 'linear');
});




// メニューボタンとナビゲーションメニューの要素を取得
const menuButton = document.getElementById('menu-sp');
const navMenu = document.getElementById('nav-sp');
const closeButton = document.getElementById('close');

// メニューボタンクリック時にメニューを表示
menuButton.addEventListener('click', () => {
  navMenu.classList.add('open');
});

// クローズボタンクリック時にメニューを非表示
closeButton.addEventListener('click', () => {
  navMenu.classList.remove('open');
});

// スライダー設定
$(function() {
  $('.bottom-carousel, .bottom-carousel-sp').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 1500,
    fade: true,
    dots: false,
    arrows: false,
    infinite: true,
  });
});

// 100pxを境にTOPに戻るボタンの表示・非表示を切り替える
$(window).scroll(function () {
  if ($(this).scrollTop() > 100) {
    $('#page-top').fadeIn();
  } else {
    $('#page-top').fadeOut();
  }
});
