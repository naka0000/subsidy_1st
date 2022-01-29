<?php

add_action( 'wp_head', function () {
?>
<script>
    var MAILFORMURL = '<?php echo admin_url( 'admin-ajax.php'); ?>';
</script>
<?php
}, 1 );

function send_mail(){
  // POSTされたJSON文字列を取り出し
    $json = file_get_contents("php://input");
    // JSON文字列をobjectに変換 ⇒ 第2引数をtrueにしないとハマるので注意
    $formDatas = json_decode($json, true);

    $blogname = get_option( 'blogname' );
    $headers = array( 'Content-Type: text/plain; charset=UTF-8','From: me Myself ' );
    $subject = $blogname.'の問い合わせ';
    $to = get_option('admin_email');
    $body = "Web制作補助金サポートへのお問い合わせです"."\n"
        ."\n"
        ."相談項目: ".$formDatas["missionCategory"]."\n"
        ."相談サイト: ".$formDatas["missionUrl"]."\n"
        ."補助金用途: ".implode(' / ', $formDatas["uses"])."\n"
        ."名前: ".$formDatas["customerName"]."\n"
        ."会社名: ".$formDatas["companyName"]."\n"
        ."電話: ".$formDatas["phone"]."\n"
        ."メール: ".$formDatas["email"]."\n"
        ."都道府県: ".$formDatas["provincial"]."\n"
        ."内容: ".$formDatas["message"]."\n";

    //メール送信をする。
    $sendingDone = wp_mail( $to, $subject, $body, $headers );
    // 送信完了したことをフロントエンドに返す。エラーがあればサーバーエラーであったことを返す。
    header("Content-Type: application/json; charset=utf-8");
    if($sendingDone){
        echo '<p>以下の内容で送信が完了しました。<br>ご連絡をお待ちください。</p>';
    } else {
        echo '<p>サーバー処理でエラーが発生しました。<br>お電話でのお問い合わせをお願いします。</p>';
    }

    // dieしておかないと末尾に余計なデータ「0」が付与されるので注意
    die();
}
add_action( 'wp_ajax_send_mail', 'send_mail' );
add_action( 'wp_ajax_nopriv_send_mail', 'send_mail' );