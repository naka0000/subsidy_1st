<?php

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
  $data = ['result' => 'SUCCESS'];
  header("Content-Type: application/json; charset=utf-8");
  echo json_encode($data);
 
    // dieしておかないと末尾に余計なデータ「0」が付与されるので注意
  die();
}
add_action( 'wp_ajax_send_mail', 'send_mail' );
add_action( 'wp_ajax_nopriv_send_mail', 'send_mail' );