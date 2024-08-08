<?php

/*--------------------------------------
CSSファイルの読み込み
---------------------------------------*/

function my_enqueue_styles() {
  wp_enqueue_style('ress', '//unpkg.com/ress/dist/ress.min.css', array(), false, 'all');
  wp_enqueue_style('style', get_stylesheet_uri(), array('ress'), false, 'all');
}

add_action('wp_enqueue_scripts', 'my_enqueue_styles');


/*--------------------------------------
JSファイルの読み込み
---------------------------------------*/

function st_enqueue_scripts() {
  wp_deregister_script('jquery');
  wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.7.1.min.js', array(), '3.7.1', false);

  wp_enqueue_script('main', get_theme_file_uri('script.js'),array('jquery'),false, true);

  wp_enqueue_script('slick', '//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick-theme.css', array(), '1.8.1', false);
}

add_action('wp_enqueue_scripts', 'st_enqueue_scripts');

add_theme_support('post-thumbnails');
