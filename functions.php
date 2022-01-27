<?php
// カスタムメニューを利用できるようにする。
register_nav_menu('mainmenu', 'メインメニュー');

// アイキャッチ画像を利用できるようにする。
add_theme_support('post-thumbnails');

//<p>タグを付けない
remove_filter('the_content','wpautop');

//RSSフィードは、サイトがブログ的な性格を帯びている場合は必要ですが、それ以外の場合はとくに必要ないので削除
remove_action('wp_head', 'feed_links', 2);
remove_action('wp_head', 'feed_links_extra', 3);

//RSD(Really Simple Discovery)用のxmlへのリンクは、WordPress外部のサービスを使用する際、そのサービスがWordPress内の情報を取得するために必要とされるものです。外部サービスを使ってサイトを運営する予定がないので削除
remove_action('wp_head', 'rsd_link');

//Microsoftが提供するブログエディター「Windows Live Writer」は使用する予定がないので削除
remove_action('wp_head', 'wlwmanifest_link');

//前後のページへのリンクを出力するタグはブログじゃないし使わないので削除
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');

//wordpressを使ってサイトを作成したことを公にするタグはWordPressのバージョン情報がバレてよろしくないので削除
remove_action('wp_head', 'wp_generator');

//WordPress4.4までは、投稿画面に[短縮URLを取得]ボタンが表示されていましたが、4.5以降では表示されなくなりましたがヘッドに情報が残っているので削除
remove_action('wp_head', 'wp_shortlink_wp_head');

//絵文字の表示をwp_head関数などから削除
add_action( 'init', function () {
     remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
     remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
     remove_action( 'wp_print_styles', 'print_emoji_styles' );
     remove_action( 'admin_print_styles', 'print_emoji_styles' );    
     remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
     remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );    
     remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
} );
//インラインスタイル削除(html直書きstylesheet削除)
add_action( 'widgets_init', function (){
	global $wp_widget_factory;
	remove_action('wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ));
} );

//初期のCSSとプラグインのCSSをwp_head関数から剥がす
add_action( 'wp_enqueue_scripts', function () {
	wp_deregister_style( 'jquery-ui-dialog-min-css' );
} );

//独自のCSSをwp_head関数へ書き込む
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'animate-min-css', "https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.0.0/animate.min.css");
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'btn', get_template_directory_uri() . '/css/btn.css');
	wp_enqueue_style( 'form', get_template_directory_uri() . '/css/form.css');
  	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
} );


//初期のJQueryと初期のJSとプラグインのJSをwp_head関数,wp_footer関数から剥がす
add_action('wp_enqueue_scripts', function () {
	wp_deregister_script('jquery');
} );

//独自のJSをwp_head関数,wp_footer関数に読み込ませる
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_script('jquery-3.4.0', get_template_directory_uri() . '/js/jquery-3.4.0.min.js', [], '', false);
	wp_enqueue_script('just-validate', 'https://unpkg.com/just-validate@latest/dist/just-validate.production.min.js', [], '', false);
	wp_enqueue_script('animate', get_template_directory_uri() . '/js/animate.js', [], '', true);
	wp_enqueue_script('post_mail', get_template_directory_uri() . '/js/post_mail.js', [], '', true);
} );


//ここからは独自PHPの読み込み。
//AJAXでwp_mailを起動させるスクリプトを読み込む
require_once("inc/post_mail.php");