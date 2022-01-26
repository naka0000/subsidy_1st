<?php
// カスタムメニューを利用できるようにする。
register_nav_menu('mainmenu', 'メインメニュー');

// アイキャッチ画像を利用できるようにする。
add_theme_support('post-thumbnails');

//<p>タグを付けない
remove_filter('the_content','wpautop');

//wordpressの様々な機能をwp_head関数から取り外す
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head');
remove_action('wp_head', 'wp_generator');
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
	wp_deregister_style( 'contact-form-7-confirm-plus' );
	wp_deregister_style( 'dashicons' );
	wp_deregister_style( 'wp-block-library' );
	wp_deregister_style( 'jquery-ui-dialog-min-css' );
	wp_deregister_style( 'contact-form-7' );
} );

//独自のCSSをwp_head関数へ書き込む
add_action( 'wp_enqueue_scripts', function () {
	wp_enqueue_style( 'style', get_template_directory_uri() . '/css/style.css');
	wp_enqueue_style( 'btn', get_template_directory_uri() . '/css/btn.css');
	wp_enqueue_style( 'form', get_template_directory_uri() . '/css/form.css');
  	wp_enqueue_style( 'animate', get_template_directory_uri() . '/css/animate.css');
// 	wp_enqueue_style( 'FCMailer', get_template_directory_uri() . '/css/FCMailer.css');
} );

//contactForm7のJSとCSSをテーマ読み込みから外す。
add_action( 'after_setup_theme', function () {
//     add_filter( 'wpcf7_load_js', '__return_false' );
//     add_filter( 'wpcf7_load_css', '__return_false' );
} );

//初期のJQueryと初期のJSとプラグインのJSをwp_head関数,wp_footer関数から剥がす
add_action('wp_enqueue_scripts', function () {
	wp_deregister_script('jquery');
} );

//独自のJSをwp_head関数,wp_footer関数に読み込ませる
add_action('wp_enqueue_scripts', function () {
	wp_enqueue_script('jquery-3.4.0', get_template_directory_uri() . '/js/jquery-3.4.0.min.js', [], '', false);
// 	wp_enqueue_script('form', get_template_directory_uri() . '/js/form.js', [], '', true);
	wp_enqueue_script('animate', get_template_directory_uri() . '/js/animate.js', [], '', true);
} );


add_action( 'wp_head', function () {
?>
    <script>
        var MAILFORMURL = '<?php echo admin_url( 'admin-ajax.php'); ?>';
    </script>
<?php
}, 1 );

function send_mail(){

  $missionCategory = $_POST["missionCategory"];
  $missionUrl = $_POST["missionUrl"];
  $uses = $_POST["uses"];
  $customerName = $_POST["customerName"];
  $companyName = $_POST["companyName"];
  $phone = $_POST["phone"];
  $email = $_POST["email"];
  $provincial = $_POST["provincial"];
  $message = $_POST["message"];


  $blogname = get_option( 'blogname' );
  $headers = array( 'Content-Type: text/plain; charset=UTF-8','From: me Myself ' );
  $subject = $blogname.'の問い合わせ';
  $to = get_option('admin_email');$body = "Web制作補助金サポートへのお問い合わせです"."\n"
	  ."\n"
	  ."相談項目:".$missionCategory."\n"
	  ."相談サイト:".$missionUrl."\n"
	  ."補助金用途:".$uses."\n"
	  ."名前:".$customerName."\n"
	  ."会社名:".$companyName."\n"
	  ."メール:".$email."\n"
	  ."電話:".$phone."\n"
	  ."都道府県:".$provincial."\n"."内容".$message."\n";

  wp_mail( $to, $subject, $body, $headers );
    // echoで、クライアント側に返すデータを送信する
  echo $result;
 
    // dieしておかないと末尾に余計なデータ「0」が付与されるので注意
  die();
}
add_action( 'wp_ajax_send_mail', 'send_mail' );
add_action( 'wp_ajax_nopriv_send_mail', 'send_mail' );