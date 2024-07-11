
$(function() {
  $('.top-carousel').slick({
    autoplay: true,
    autoplaySpeed: 5000,
    speed: 1500,
    fade: true,
    dots: false,
    arrows: false,
    infinite: true,
  });
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

$(function() {
  $('.bottom-carousel').slick({
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
