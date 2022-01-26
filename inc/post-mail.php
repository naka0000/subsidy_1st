<?php
  require('../../../../wp-blog-header.php');
  require_once("../../../../wp-config.php");

  // chenge html mail
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
  $to = "bestlifenamba0000@gmail.com";//get_option('admin_email');
  $body = "Web制作補助金サポートへのお問い合わせです"."\n"
	  ."\n"
	  ."相談項目:".$missionCategory."\n"
	  ."相談サイト:".$missionUrl."\n"
	  ."補助金用途:".$uses."\n"
	  ."名前:".$customerName."\n"
	  ."会社名:".$companyName."\n"
	  ."メール:".$email."\n"
	  ."電話:".$phone."\n"
	  ."都道府県:".$provincial."\n"
	  ."内容".$message."\n";

  wp_mail( $to, $subject, $body, $headers );
?>
