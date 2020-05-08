<?php

//-------------------------------------------------------------
//                 ログイン画面のロゴ
//-------------------------------------------------------------

function custom_login_logo() {
        echo '<style type="text/css">h1 a { background: url('.get_template_directory_uri().'/img/common/logo.svg) 50% 50% no-repeat !important; width: 152px !important; height: 152px !important; }</style>';
}
add_action('login_head', 'custom_login_logo');


//-------------------------------------------------------------
//                 管理画面の調整
//-------------------------------------------------------------


// フッターWordPressリンクを非表示に
function custom_admin_footer() {
 // echo '<a href="mailto:xxx@zzz">お問い合わせ</a>';
 echo '';
 }
add_filter('admin_footer_text', 'custom_admin_footer');


//  wp-content/theme/[テーマ名]/functions.php
function wp_custom_admin_css() {
    $url = get_option( 'siteurl');
    $url = $url . '/wp-content/themes/[テーマ名]/styles/wp-admin.css';
    echo '<!-- custom admin css -->
    <!-- /end custom adming css -->';
}
add_action( 'admin_head', 'wp_custom_admin_css', 100);


//-------------------------------------------------------------
//                 imgパス自動取得
//-------------------------------------------------------------

function replaceImagePath($arg) {
	$content = str_replace('"img/', '"' . get_template_directory_uri() . '/img/', $arg);
	return $content;
}
add_action('the_content', 'replaceImagePath');


//-------------------------------------------------------------
//                 固定ページビジュアルエディタ無効
//-------------------------------------------------------------


//画像サイズ指定

add_image_size( 'item-thumbnails', 206, 206, true);
add_image_size( 'item-datail-main', 550, 430, true);
add_image_size( 'top-blog', 280, 185, true);
add_image_size( 'top-blog2', 560, 370, true);
add_image_size( 'work', 370, 370, true);
add_image_size( 'top-public', 280, 185, array( 'center', 'top' ));
add_image_size( 'top-public2', 560, 370, array( 'center', 'top' ));
add_image_size( 'interview-thum', 220, 270, true);
add_image_size( 'interview', 700, 465, true);
add_image_size( 'public-list', 500, 9999, false);


//アイキャッチ使用
add_theme_support( 'post-thumbnails' );

add_image_size('blog',255,189,true);

//get_the_excerpt() で取得する文字列に改行タグを挿入
function apply_excerpt_br( $value ) {
	return nl2br( $value );
}
add_filter( 'get_the_excerpt', 'apply_excerpt_br' );


//-------------------------------------------------------------
//                 Title 文字数制限
//-------------------------------------------------------------

function the_title_excerpt($length){
  global $post;
  if(mb_strlen($post->post_title)>$length) {
    $title= mb_substr($post->post_title,0,$length) ;
    echo $title. '...' ;
  } else {
    echo $post->post_title;
  }
}

//-------------------------------------------------------------
//                 excerpt 設定
//-------------------------------------------------------------
// 抜粋の長さを変更する
function custom_excerpt_length($length) {
    return 75;
}
add_filter('excerpt_length', 'custom_excerpt_length');

// 文末文字を変更する
function custom_excerpt_more($more) {
    return ' ... ';
}
add_filter('excerpt_more', 'custom_excerpt_more');


//-------------------------------------------------------------
//                 Taxonomy posts_per_page
//------------------------------------------------------------
function my_post_queries( $query ) {

    if( is_tax('lineup-tax') || is_post_type_archive('lineup')){
      $query->set('posts_per_page', -1);
    }
  }
add_action( 'pre_get_posts', 'my_post_queries' );


//-------------------------------------------------------------
//                 ページャーにクラスを追加
//-------------------------------------------------------------
add_filter('next_posts_link_attributes', 'posts_link_attributes');
add_filter('previous_posts_link_attributes', 'posts_link_attributes');

function posts_link_attributes() {
    return 'class="styled-button"';
}

//-------------------------------------------------------------
//                 　　　　　カテゴリ取得
//-------------------------------------------------------------

function get_cat_type($get_type) {
  global $post;
  $category = get_the_category($post->ID);
  if($get_type == 'slug') {
    $cat_type = $category[0]->category_nicename;
  }elseif($get_type == 'name') {
    $cat_type = $category[0]->cat_name;
  }
  echo $cat_type;
}

//-------------------------------------------------------------
//                 固定ページの親スラッグ
//-------------------------------------------------------------

function is_parent_slug() {
  global $post;
  if ($post->post_parent) {
    $post_data = get_post($post->post_parent);
    return $post_data->post_name;
  }
}
//-------------------------------------------------------------
//                Gutenberg対応
//-------------------------------------------------------------
function gutenberg_support_setup() {
 
  //Gutenberg用スタイルの読み込み
  add_theme_support( 'wp-block-styles' );
 
  //「幅広」と「全幅」に対応
  add_theme_support( 'align-wide' );
 
}
add_action( 'after_setup_theme', 'gutenberg_support_setup' );
function mytheme_setup_theme_supported_features() {
  add_theme_support( 'editor-color-palette', array(
      array(
          'name' => __( 'strong magenta', 'themeLangDomain' ),
          'slug' => 'strong-magenta',
          'color' => '#a156b4',
      ),
      array(
          'name' => __( 'light grayish magenta', 'themeLangDomain' ),
          'slug' => 'light-grayish-magenta',
          'color' => '#d0a5db',
      ),
      array(
          'name' => __( 'very light gray', 'themeLangDomain' ),
          'slug' => 'very-light-gray',
          'color' => '#eee',
      ),
      array(
          'name' => __( 'very dark gray', 'themeLangDomain' ),
          'slug' => 'very-dark-gray',
          'color' => '#444',
      ),
  ) );
}

add_action( 'after_setup_theme', 'mytheme_setup_theme_supported_features' );

function aktk_editor_color_palette() {
  add_theme_support( 'editor-color-palette', array(
      array(
          'name'  => 'Gold',
          'slug'  => 'gold',
          'color' => '#35b99d',
      ),
      array(
          'name'  => 'Light Gold',
          'slug'  => 'light-gold',
          'color' => '#00B0F0',
      ),
      array(
          'name'  => 'Gray',
          'slug'  => 'gray',
          'color' => '#fff1b5',
      ),
      array(
          'name'  => 'Light Gray',
          'slug'  => 'light-gray',
          'color' => '#f7f7f7',
      ),
      array(
          'name'  => 'Text',
          'slug'  => 'text-black',
          'color' => '#222222',
      ),
      array(
          'name'  => 'White',
          'slug'  => 'white',
          'color' => '#ffffff',
      ),
  ) );
}

add_action( 'after_setup_theme', 'aktk_editor_color_palette' );
function add_youtube_option( $ret ) {
	return str_replace( '?feature=oembed', '?rel=0', $ret );
}
add_filter( 'the_content', 'add_youtube_option', 11 );

add_theme_support( 'responsive-embeds' );
add_editor_style( 'editor-style.css' );
add_theme_support( 'editor-styles' );
add_filter( 'block_editor_settings', function( $editor_settings ){
  $editor_settings['alignWide'] = true; // alignWide 設定を上書き
  return $editor_settings;
});

?>