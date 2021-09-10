<?php
//CSS,jQueryファイルを読み込む
function theme_name_files()
{
  //CSS読み込み id="main-style-css"
  wp_enqueue_style('main-style', get_stylesheet_uri(), [], wp_get_theme()->get('Version'));

  //jQuery読み込み
  wp_enqueue_script('jquery');
  //js読み込み
  wp_enqueue_script('original-utility', get_theme_file_uri('/js/utility.js'), [], '', true);
  //高さを揃える
  wp_enqueue_script('matchHeight', get_theme_file_uri('/js/jquery.matchHeight.js'), [], '', true);
}
add_action('wp_enqueue_scripts', 'theme_name_files');


// テーマフォルダ直下のeditor-style.cssを読み込み
add_action('admin_init', function () {
  add_editor_style();
});


//ウィジェットエリアを作成
register_sidebar(array(
  'id' => 'column1',
  'name' => 'ブログサイドバー1段目',
  'before_widget' => '<aside id="%1$s" class="widget %2$s">',
  'after_widget' => '</aside>',
  'before_title' => '<h1 class="widgettitle">',
  'after_title' => '</h1>',
));


//検索フォーム
add_theme_support('html5', array('search-form'));

//アイキャッチ画像
add_theme_support('post-thumbnails');
//画像のサイズ プロジェクトによって適当に数値を変えること
//add_image_size('thumb750', 750, 500, true);


//カスタムナビメニュー
register_nav_menu('navigation', 'ナビゲーションメニュー');
//メニュー表示　スマホ用
register_nav_menu('navigation_sp', 'スマホ用ナビゲーションメニュー');

//フッターメニュー
register_nav_menu('footer-menu1', 'フッターメニュー1');


//記事抜粋の文字数
function my_length($length)
{
  return 100;
}
add_filter('excerpt_mblength', 'my_length');


//記事抜粋の省略記号
function my_more($more)
{
  return ' ... <span class="excerpt-more">more</span>';
}
add_filter('excerpt_more', 'my_more');


// TinyMCE Advancedのフォントサイズ変更
function tinymce_custom_fonts($setting)
{
  $setting['fontsize_formats'] = "12px 14px 18px 21px 24px 30px";
  return $setting;
}
add_filter('tiny_mce_before_init', 'tinymce_custom_fonts', 5);

add_filter('tiny_mce_before_init', function ($settings) {
  $settings['font_formats'] =
    "游ゴシック='游ゴシック','Yu Gothic';" .
    "ヒラギノ角ゴ='ヒラギノ角ゴ Pro W3','Hiragino Kaku Gothic Pro','ヒラギノ角ゴ ProN W3','Hiragino Kaku Gothic ProN';" .
    "游明朝='游明朝','Yu Mincho';" .
    "ヒラギノ明朝='ヒラギノ明朝 Pro W3','Hiragino Mincho Pro',ヒラギノ明朝 ProN W3','Hiragino Mincho ProN';" .
    "游明朝体='游明朝体','YuMincho';";
  return $settings;
});


//body_classにページスラッグ名を含ませたりオリジナルのclassを追加&タブレットとスマホの場合のクラスも追加
function pagename_class($classes = '')
{
  if (is_page()) { //slugを追加
    $page = get_page(get_the_ID());
    $classes[] = $page->post_name;
  } elseif (is_category() || is_single()) { //slugを追加
    $category = get_the_category();
    $classes[] = $category[0]->slug;
  }
  if (wp_is_mobile()) {
    $classes[] .= 'mobile'; //mobileの場合classを追加
  }
  //$classes[] .= '任意のクラス名'; //その他必要なクラス名があれば追加
  return $classes;
}
add_filter('body_class', 'pagename_class');



//「投稿」の名前を変更
function Change_menulabel()
{
  global $menu;
  global $submenu;
  $name = 'お知らせ';
  $menu[5][0] = $name;
  $submenu['edit.php'][5][0] = $name . '一覧';
  $submenu['edit.php'][10][0] = '新しい' . $name;
}
function Change_objectlabel()
{
  global $wp_post_types;
  $name = 'お知らせ';
  $labels = &$wp_post_types['post']->labels;
  $labels->name = $name;
  $labels->singular_name = $name;
  $labels->add_new = _x('追加', $name);
  $labels->add_new_item = $name . 'の新規追加';
  $labels->edit_item = $name . 'の編集';
  $labels->new_item = '新規' . $name;
  $labels->view_item = $name . 'を表示';
  $labels->search_items = $name . 'を検索';
  $labels->not_found = $name . 'が見つかりませんでした';
  $labels->not_found_in_trash = 'ゴミ箱に' . $name . 'は見つかりませんでした';
}
add_action('init', 'Change_objectlabel');
add_action('admin_menu', 'Change_menulabel');
