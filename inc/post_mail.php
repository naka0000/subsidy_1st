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
    
    //メール送信をする。
    $to = get_option('admin_email');
    $subject = get_option('blogname').'の問い合わせ';
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
    $headers = array( 'Content-Type: text/plain; charset=UTF-8','From: me Myself ' );
    $sendingDone = wp_mail( $to, $subject, $body, $headers );

    //お客さんにも自動返信を行う。
    $customerAddress = $formDatas["email"];
    $autoReplySubject = "GRIT GROUPのWeb制作補助金サポートへのお問い合わせが完了しました。";
    $autoReplyBody = $formDatas["customerName"]."様"."\n"
                    ."この度はGRIT GROUPのWeb制作補助金サポートへお問い合わせいただきありがとうございます。"."\n"
                    ."\n"
                    ."以下のお問い合わせ内容を受け付けました。"."\n"
                    ."\n"
                    ."\n"
                    ."相談項目: ".$formDatas["missionCategory"]."\n"
                    ."相談サイト: ".$formDatas["missionUrl"]."\n"
                    ."補助金用途: ".implode(' / ', $formDatas["uses"])."\n"
                    ."名前: ".$formDatas["customerName"]."\n"
                    ."会社名: ".$formDatas["companyName"]."\n"
                    ."電話: ".$formDatas["phone"]."\n"
                    ."メール: ".$formDatas["email"]."\n"
                    ."都道府県: ".$formDatas["provincial"]."\n"
                    ."内容: ".$formDatas["message"]."\n"
                    ."\n"
                    ."3営業日以内に当社担当からご連絡を差し上げます。"."\n"
                    ."今しばらくお待ちください";
    $headers = array( 'Content-Type: text/plain; charset=UTF-8' );
    $sendingDoneCustomer = wp_mail( $customerAddress, $autoReplySubject, $autoReplyBody, $headers );

    // 送信完了したことをフロントエンドに返す。エラーがあればサーバーエラーであったことを返す。
    header("Content-Type: application/json; charset=utf-8");
    if($sendingDoneCustomer){
        echo '<p>以下の内容で送信が完了しました。<br>自動返信メールが届いていることをご確認の上、ご連絡お待ちください。</p>';
    } else {
        echo '<p>サーバー処理でエラーが発生しました。<br>お電話でのお問い合わせをお願いします。</p>';
    }

    // dieしておかないと末尾に余計なデータ「0」が付与されるので注意
    die();
}
add_action( 'wp_ajax_send_mail', 'send_mail' );
add_action( 'wp_ajax_nopriv_send_mail', 'send_mail' );