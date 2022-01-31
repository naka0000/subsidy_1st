<?php
/*
 * Template Name: ホームページ
 */
?>
<!doctype html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<title>Web制作 + 補助金申請サポート付き | Grit Group</title>
<?php wp_head(); ?>
</head>

<body>
	<div id="wrapper">
	<header>
		<div class="h-wrap">
			<div class="h-inner">
				<div class="h-box">
					<h1><a href="#">
						<img src="<?= get_template_directory_uri(); ?>/img/logo2.svg" alt="Grit Group : Web制作 + 補助金申請サポート付き">
						<p>Web制作 + 補助金申請サポート付き</p></a>
					</h1>
					<div class="contact pc_tab">	
						<p><a href="tel:06-6606-9650"><span>06-6606-9650</span>
						<small>受付時間　9:00 &sim; 17:00 (日祝除く）</small></a></p>
					</div>
				</div>
				<div class="catch-copy">
					<div><img src="<?= get_template_directory_uri(); ?>/img/catch-copy.png" alt="ホームページ制作やリニューアルに最大50万円の補助金を受けられるってご存知ですか？"></div>
					<div class="h-btn">
						<div class="btn-wrap btn-wrap-pc-sp2">
						  <a href="#form" class="btn btn--contact">
							<i class="fas fa-envelope fa-position-left"></i>
							お問い合わせはこちら
							<i class="fas fa-angle-right fa-position-right"></i>
						  </a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</header>
	
	<main>
		<section id="about" class="section">
			<div class="sec__wrap">
				<div class="ttl__sub">ABOUT</div>
				<div class="fukidashi__sub">
					<div class="fukidashi_cnt">
						<div class="fukidashi_bg">
							<img class="pc_tab" src="<?= get_template_directory_uri(); ?>/img/fukidashi.svg" alt="">
							<img class="sp" src="<?= get_template_directory_uri(); ?>/img/fukidashi-sp.svg" alt="">
						</div>
						<div class="fukidashi_text">
							<p><span class="smoothText"><span class="smoothTextTrigger">補助金獲得サービスって？</span></span></p>
						</div>
					</div>
				</div>
				<div class="about__wrap ">
					<div class="about__sub contents"><p>小規模事業者持続化補助金とは、日本商工会議所と全国商工会連合会が実施する小規模事業者の生産性向上と持続的発展を目的とした商工会議所の補助を受けながら経営企画書を作成し、計画にそって行う事業に対して補助金を支給する支援制度です。</p></div>
				</div>
				<div class="exam__wrap">
					<div class="exam__sub contents">
						<h3>この補助金を活用した<br class="sp">プランの場合</h3>
						<p><span>ホームページ制作に80万円<br class="sp">掛かった場合</span></p>
						<p><img src="<?= get_template_directory_uri(); ?>/img/exam2.png" alt=""></p>
						<p class="asterisk">※上記はあくまでイメージになります。申請年度によって条件や金額が変わりますので、詳細は各種補助金のホームページや資料をご参照ください。</p>
					</div>
				</div>
			</div>
		</section>
		
		<section id="rqm" class="section">
			<div class="sec__wrap">
				<div class="ttl__sub">REQUIREMENTS</div>
				<div class="fukidashi__sub">
					<div class="fukidashi_cnt">
						<div class="fukidashi_bg">
							<img class="pc_tab" src="<?= get_template_directory_uri(); ?>/img/fukidashi.svg" alt="">
							<img class="sp" src="<?= get_template_directory_uri(); ?>/img/fukidashi-sp.svg" alt="">
						</div>
						<div class="fukidashi_text">
							<p><span class="smoothText"><span class="smoothTextTrigger">こんなお悩みありませんか？</span></span></p>
						</div>
					</div>
				</div>
				<div class="rqm__wrap">
					<div class="rqm__sub contents">
						<div class="item"><img src="<?= get_template_directory_uri(); ?>/img/rqm_img.jpg" alt="こんなお悩みありませんか？"></div>
						<div class="item">
							<ul>
								<li><p>効果的なHPを制作したい、でも本格的にWEB制作会社で作ると高い</p></li>
								<li><p>制作費は抑えたい、でも売上UPや集客はしっかり行いたい</p></li>
								<li><p>現在のHPが古く、新規のお客様が増えない</p></li>
								<li><p>コロナ禍で売上が減少したので、ネット集客をしたい</p></li>
								<li><p>ホームページを作ったが、そのまま放置している</p></li>
								<li><p>補助金を利用したいが、申請方法がわからない</p></li>
								<li><p>自分で経営計画を作成して申請したが、採択に落ちた</p></li>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="reasons" class="section">
			<div class="sec__wrap">
				<div>
					<div class="ttl__sub">REASONS</div>
					<div class="fukidashi__sub">
						<div class="fukidashi_cnt">
							<div class="fukidashi_bg">
								<img class="pc_tab" src="<?= get_template_directory_uri(); ?>/img/fukidashi.svg" alt="">
								<img class="sp" src="<?= get_template_directory_uri(); ?>/img/fukidashi-sp.svg" alt="">
							</div>
							<div class="fukidashi_text">
								<p><span class="smoothText"><span class="smoothTextTrigger">Grit Groupが選ばれる理由</span></span></p>
							</div>
						</div>
					</div>
				</div>
				<div class="reasons__wrap ">
					<div class="reasons__sub contents">
						<div class="reasons_box">
							<div class="reasons_list">
								<div class="slide-in leftAnime animate__delay">
							    	<div class="slide-in_inner leftAnimeInner">
										<figure><img src="<?= get_template_directory_uri(); ?>/img/icon_num01.png" alt=""></figure>
										<h4>小規模事業者持続化補助金の申請サポートが無料</h4>
										<p>補助金申請の際の申請書作成の全てを代行。<br class="pc_tab">
										申請書作成にあたっては、お電話でのヒアリング、またはヒアリングシートご入力後、<br class="pc_tab">
										返信いただくだけですので、面倒なことは一切ありません。</p>
									</div>
							    </div>
							</div>
							<div class="reasons_list center_txt">
								<div class="slide-in upAnime animate__delay">
									<div class="slide-in_inner upAnimeInner">
										<figure><img src="<?= get_template_directory_uri(); ?>/img/icon_num02.png" alt=""></figure>
										<h4>レスポンシブデザイン<br class="pc_tab">
										PC・スマートフォン・タブレット全てに最適化</h4>
										<p>スマートフォンはもちろん、コロナ禍で需要が増しているタブレット端末にもデザインを最適化。<br class="pc_tab">
										どんな場所でも、どんなデバイスでも正しく表示されます。</p>
									</div>
								</div>
							</div>
							<div class="reasons_list right_txt">
								<div class="slide-in rightAnime animate__delay">
									<div class="slide-in_inner rightAnimeInner">
										<figure><img src="<?= get_template_directory_uri(); ?>/img/icon_num03.png" alt=""></figure>
										<h4>Web集客や小規模プロモーションの成功体験を活かした集客提案</h4>
										<p>私たちは、年間予算5000万円のような大型プロモーションよりも、<br class="pc_tab">
										月予算10万円〜100万円といった小額の集客やプロモーションを業務としてきました。<br class="pc_tab">
										店舗ビジネスやスタートアップ企業、士業など、<br class="pc_tab">
										プロモーションに予算をかけれない企業様こそご相談ください。</p>
									</div>
							  	</div>
							</div>
							<div class="reasons_list center_txt">
								<div class="slide-in upAnime animate__delay">
									<div class="slide-in_inner upAnimeInner">
										<figure><img src="<?= get_template_directory_uri(); ?>/img/icon_num04.png" alt=""></figure>
										<h4>SNSと親和性の高い操作性・デザイン・UX・UI</h4>
										<p>現在、多くの人が触れているSNS。<br class="pc_tab">
										デザインや操作性はSNSに近いほど直感的に使いやすいとユーザーは感じます。<br class="pc_tab">
										そんなユーザビリティーの高いホームページを制作しています。</p>
									</div>
								</div>
							</div>
							<div class="reasons_list">
								<div class="slide-in leftAnime animate__delay">
							    <div class="slide-in_inner leftAnimeInner">
									<figure><img src="<?= get_template_directory_uri(); ?>/img/icon_num05.png" alt=""></figure>
									<h4>ブログ機能や更新を簡単に<br class="pc_tab">
									WordPress実装・カスタマイズも可能</h4>
									<p>SEO対策やメディア運営には欠かせないブログ機能も実装。<br class="pc_tab">
									貴社仕様にカスタマイズしたCMS開発も可能です。</p></div>
							    </div>
							</div>
							<div class="reasons_list center_txt">
								<div class="slide-in upAnime animate__delay">
									<div class="slide-in_inner upAnimeInner">
										<figure><img src="<?= get_template_directory_uri(); ?>/img/icon_num06.png" alt=""></figure>
										<h4>ドメインやサーバーの取得、設定といった<br class="pc_tab">
										専門性の高い知識が必要な分野も全て代行</h4>
										<p>知識がなければ戸惑ってしまうドメインやサーバーなどの取得・設定代行も<br class="pc_tab">
										すべてお任せください。<br class="pc_tab">
										※ 一部のドメイン事業者とサーバー会社は代行できない場合がございます。</p>
									</div>
								</div>
							</div>
							<div class="reasons_list right_txt">
								<div class="slide-in rightAnime animate__delay">
							  	<div class="slide-in_inner rightAnimeInner"><figure><img src="<?= get_template_directory_uri(); ?>/img/icon_num07.png" alt=""></figure>
								<h4>写真・動画撮影も対応可能</h4>
								<p>スチール撮影からスタジオでの撮影までいたします。<br class="pc_tab">
								動画についても撮影から編集まで可能です。<br class="pc_tab">
								プロダクトやスタッフの魅力を引き出し、<br class="pc_tab">
								さらなるブランディング効果を発揮します。</p></div>
							  	</div>
							</div>
							<div class="reasons_list center_txt">
								<div class="slide-in upAnime animate__delay">
									<div class="slide-in_inner upAnimeInner">
										<figure><img src="<?= get_template_directory_uri(); ?>/img/icon_num08.png" alt=""></figure>
								<h4>公開後のサポートも充実<br class="pc_tab">
								テキスト修正や画像変更も最短5分で対応</h4>
								<p>ホームページは納品後も変更、修正、更新が必要です。<br class="pc_tab">
								弊社では月々の保守管理もお受けしておりますので、<br class="pc_tab">
								スタッフの入れ替わりや会社概要の変更、各ページの画像変更も<br class="pc_tab">
								最短5分で対応いたします。</p>
									</div>
								</div>
							</div>
							<div class="reasons_list">
								<div class="slide-in leftAnime">
							    <div class="slide-in_inner leftAnimeInner animate__delay"><figure><img src="<?= get_template_directory_uri(); ?>/img/icon_num09.png" alt=""></figure>
								<h4>無料で常時SSL通信（https接続）セキュリティー対策万全</h4>
								<p>弊社指定のサーバーで、無料SSL通信が可能です。<br class="pc_tab">
								問い合わせフォーム送信や商品購入時のデータ通信時に<br class="pc_tab">
								暗号化通信で高い情報セキュリティーを実装します。</p></div>
							    </div>
							</div>
							<div class="reasons_list center_txt">
								<figure class="plus_img pc_tab"><img src="<?= get_template_directory_uri(); ?>/img/plus.png" alt=""></figure>
								<h4 class="plus_txt"><span class="sp">さらに</span>公開後の集客サポートも充実</h4>
							</div>
							<p class="center_txt asterisk">※ヒアリング・質問事項に回答していただくだけ、その後の申請作業は基本的に丸投げでOK</p>
						</div>
					</div>
				</div>
			</div>
		</section>
		
		<section id="ctf" class="section">
			<div class="flex">
				<div class="flex_left"><figure><img src="<?= get_template_directory_uri(); ?>/img/certificate.png" alt=""></figure></div>
				<div class="flex_right">
					<div class="flex-right__sub">
						<h2>信頼できる制作会社を<br class="sp">お探しの方へ</h2>
						<p><span>WEBコンサル会社 +　デザイン事務所 ＝<br><span class="gg">（株）GRIT GROUP</span></span></p>
					</div>
				</div>
			</div>
			<div class="btn-wrap btn-wrap-pc-sp2 flex-container">
			  <a href="#form" class="btn btn--contact2 flex-item">
				<i class="fas fa-envelope fa-position-left"></i>
				お問い合わせはこちら
				<i class="fas fa-angle-right fa-position-right"></i>
			  </a>
			  <a href="tel:06-6606-9650" class="btn btn--tel flex-item">
				<i class="fas fa-phone-volume fa-position-left"></i>
				<small>受付時間　9:00 &sim; 17:00 (日祝除く）</small>
				<span class="number phone-number">TEL：06-6606-9650</span>
				<i class="fas fa-angle-right fa-position-right"></i>
			  </a>
			</div>
		</section>
		
		<section id="flow" class="section">
			<div class="sec__wrap">
				<div class="ttl__sub">FLOW</div>
				<div class="fukidashi__sub">
					<div class="fukidashi_cnt">
						<div class="fukidashi_bg">
							<img class="pc_tab" src="<?= get_template_directory_uri(); ?>/img/fukidashi.svg" alt="">
							<img class="sp" src="<?= get_template_directory_uri(); ?>/img/fukidashi-sp.svg" alt="">
						</div>
						<div class="fukidashi_text">
							<p><span class="smoothText"><span class="smoothTextTrigger">申請～制作までの流れ</span></span></p>
						</div>
					</div>
				</div>
				<div class="flow__wrap contents">
					<div class="container">
						<div class="box first">
							<div class="flow_item">
								<div class="flow__ttl"><span class="montserrat number">STEP - </span>
								<h5>お問い合わせ</h5></div>
								<p>下記フォーム、またはお電話にてお問い合わせください。相談は無料です。</p>
							</div>
							<div class="flow_item">
								<div class="flow__ttl"><span class="montserrat number">STEP - </span>
								<h5>ヒアリング</h5></div>
								<p>貴社のご相談内容をお聞きし、補助金が申請可能か診断。<br>最適な補助金を使った制作をご提案させていただきます。</p>
							</div>
							<div class="flow_item">
								<div class="flow__ttl"><span class="montserrat number">STEP - </span>
								<h5>申請サポート</h5></div>
								<p>専門チームが再度、小規模事業者持続化補助金の申請に必要な情報をヒアリングさせていただきます。必要書類やご準備いただく書類もお伝えいたしますので、一切面倒なことはございません。</p>
							</div>
						</div>
						<div class="freeflow">
							<h5>無料</h5>
							<p>1週間〜2週間</p>
						</div>
					</div>
					<div class="flow_in">
						<div class="container">
							<div class="flow_result">
								<div class="result_circle">
									<h5>採択結果発表</h5>
									<p>申請から2ヶ月〜4ヶ月</p>
								</div>
								<div class="result_inner">
									<p>不採択の場合、一切費用は発生致しません。<br>不採択でも制作する場合は、弊社規定に従い別途割引させていただきます。</p>
								</div>
							</div>
							<div class="box second">
								<div class="flow_item">
									<div class="flow__ttl"><span class="montserrat number">STEP - </span>
									<h5>制作</h5></div>
									<p>補助金採択が通りましたら、補助金採択が決まり次第、制作を開始いたします。</p>
								</div>
								<div class="flow_item">
									<div class="flow__ttl"><span class="montserrat number">STEP - </span>
									<h5>報告書の作成</h5></div>
									<p>納品後、商工会への実績報告書を作成いたします。申請同様に提出までサポートさせて頂きます。</p>
								</div>
								<div class="flow_item">
									<div class="flow__ttl"><span class="montserrat number">STEP - </span>
									<h5>補助金の受領</h5></div>
									<p>商工会より交付が決定され次第、通知があり、指定口座に振り込まれます。</p>
								</div>
							</div>
						</div>			
					</div>
				</div>
			</div>
		</section>
		
		<section id="faq" class="section">
			<div class="sec__wrap">
				<div class="ttl__sub">FAQ</div>
				<div class="fukidashi__sub">
					<div class="fukidashi_cnt">
						<div class="fukidashi_bg">
							<img class="pc_tab" src="<?= get_template_directory_uri(); ?>/img/fukidashi.svg" alt="">
							<img class="sp" src="<?= get_template_directory_uri(); ?>/img/fukidashi-sp.svg" alt="">
						</div>
						<div class="fukidashi_text">
							<p><span class="smoothText"><span class="smoothTextTrigger">よくあるご質問</span></span></p>
						</div>
					</div>
				</div>
				<div class="faq__wrap">
					<div class="faq__sub">
						<dl class="faq_item fadeUpTrigger">
							<dt>不採択の場合は、料金はかからないですか？</dt>
							<dd>はい、不採択の場合は<span class="bk">一切料金は発生致しません。</span><br>
								もし、不採択でも制作をご希望される場合は、<span class="bk">別途割引を適用</span>し、お客様のご負担を少なくさせていただきます。</dd>
						</dl>
						<dl class="faq_item fadeUpTrigger">
							<dt>採択結果を待っている間に制作は進めてもらえますか？</dt>
							<dd>小規模事業者持続化補助金は採択後に制作を始める事業のみ採択となります。<br>
								採択前に制作をした場合は、<span class="bk">補助金の対象外</span>となりますので、採択が通るまでお待ちください。<br>
								Web制作をお急ぎの場合は、補助金の利用はオススメしません。</dd>
						</dl>
						<dl class="faq_item fadeUpTrigger">
							<dt>採択結果が出るまでどれぐらい待てばいいですか？</dt>
							<dd>申請期限から<span class="bk">2ヶ月〜4ヶ月</span>ほどで結果が発表されます。<br>
							補助金事務局が採択に時間がかかる場合もありますのでご了承ください。</dd>
						</dl>
						<dl class="faq_item fadeUpTrigger">
							<dt>コーポレートサイトは補助金で制作できますか？</dt>
							<dd>いいえ、通常のコーポレートサイトに補助金は利用できません。<br>
							小規模事業者持続化補助金は、<span class="bk">既存事業の販路拡大、感染リスクを低減するための新規事業</span>に対する補助金です。<br>
							経営計画にそれらのことを盛り込んで採択が通っても、事業報告で販路拡大や感染リスクの低減に結びつかない場合は、補助金の支払いが却下されることもございます。</dd>
						</dl>
						<dl class="faq_item fadeUpTrigger">
							<dt>申請サポートのみお願いできますか？</dt>
							<dd>はい、可能です。<br>
							申請サポートのみの場合は、採択不採択に限らず代行費用が発生しますので、ご了承ください。</dd>
						</dl>
						<dl class="faq_item fadeUpTrigger">
							<dt>小規模事業者持続化補助金の申請対象を教えてもらえますか？</dt>
							<dd>商工会が小規模事業者と定義しているのは、<br><span class="bk">商業・サービス業（宿泊業・娯楽業除く）5人以下、それ以外の事業は20人以下</span>です。<br>
								細かい対象条件もございますので、お問い合わせください。</dd>
						</dl>
						<dl class="faq_item fadeUpTrigger">
							<dt>どれくらいの期間でホームページは出来上がりますか？</dt>
							<dd>およそ<span class="bk">3ヶ月〜4ヶ月</span>ほどの期間をいただいております。<br>
							プロモーション企画や撮影なども必要であれば、さらにお時間をいただく場合もございますので、制作内容をヒアリング後、制作スケジュールをお出しさせていただきます。</dd>
						</dl>
						<dl class="faq_item fadeUpTrigger">
							<dt>ホームページ制作完了後はどうなりますか？</dt>
							<dd>弊社では納品後の保守・管理もお受けしております。<br>Web広告やコンサルティングをご希望の場合は打ち合わせの際にご相談ください。</dd>
						</dl>
					</div>
				</div>
			</div>
		</section>
		
		<section id="form" class="section">
			<div class="sec__wrap">
				<div class="ttl__sub">FORM</div>
				<div class="fukidashi__sub">
					<div class="fukidashi_cnt">
						<div class="fukidashi_bg">
							<img class="pc_tab" src="<?= get_template_directory_uri(); ?>/img/fukidashi.svg" alt="">
							<img class="sp" src="<?= get_template_directory_uri(); ?>/img/fukidashi-sp.svg" alt="">
						</div>
						<div class="fukidashi_text">
							<p><span class="smoothText"><span class="smoothTextTrigger">申し込むフォーム</span></span></p>
						</div>
					</div>
				</div>
				<div class="form__wrap">
					<div class="form__sub contents">
						<p id="section-title" class="sec__ttl">気軽にご相談ください！</p>
						<div id="mail" class="target">
							<form action="#" id="ajaxForm" class="fc-form">
								<div class="main">
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>ご相談項目</span><span class="mark-require">必須</span></div>
											<div class="input form-value">
												<div id="mission-category-group" class="form-check">
													<label><input type="radio" name="checkbok" value="ホームページを新規制作">ホームページを新規制作</label>
													<label><input type="radio" name="checkbok" value="ホームページをリニューアル">ホームページをリニューアル</label>
												</div>
												<div class="blk-cap">
													<p>リニューアルをご選択された方はURLをご入力ください</p>
													<input type="text" name="group-text" placeholder="例）http://gritgroup.co.jp/">
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption" data-for="use" data-join=","><span>補助金用途</span><span class="mark-require">必須</span></div>
											<div class="input">
												<div id="uses-checkbox-group" class="form-check">
													<input type="checkbox" id="uses-checkbox-group1" name="use[]" value="販促" class=""><label for="uses-checkbox-group1">販促</label>
													<input type="checkbox" id="uses-checkbox-group2" name="use[]" value="設備" class=""><label for="uses-checkbox-group2">設備</label>
													<input type="checkbox" id="uses-checkbox-group3" name="use[]" value="感染予防対策" class=""><label for="uses-checkbox-group3">感染予防対策</label>
													<input type="checkbox" id="uses-checkbox-group4" name="use[]" value="その他" class=""><label for="uses-checkbox-group4">その他</label>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>お名前 / 担当者名</span><span class="mark-require">必須</span></div>
											<div class="input">
												<input type="text" name="name" id="name" class="form__input form-control" placeholder="例）田中 太郎">
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>店舗名 / 会社名</span><span class="mark-require">必須</span></div>
											<div class="input">
												<input type="text" name="company" id="company" class="form__input form-control" placeholder="例）株式会社 GRIT GROUP">
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span data-for="phone">電話番号</span><span class="mark-require">必須</span></div>
											<div class="input">
												<input type="tel" name="phone" id="phone" class="form__input form-control" placeholder="例）06-6606-9650">
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>メールアドレス</span><span class="mark-require">必須</span></div>
											<div class="input">
												<input type="email" name="email" id="email" class="form__input form-control" placeholder="例）info@grit-japan.co.jp">
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption">
												<span>都道府県</span>
												<span class="mark-require">必須</span></div>
											<div class="input">
												<select name="provincial" id="provincial">
													<option value selected disabled>選択してください</option>
													<option value="北海道">北海道</option>
													<option value="青森県">青森県</option>
													<option value="岩手県">岩手県</option>
													<option value="宮城県">宮城県</option>
													<option value="秋田県">秋田県</option>
													<option value="山形県">山形県</option>
													<option value="福島県">福島県</option>
													<option value="茨城県">茨城県</option>
													<option value="栃木県">栃木県</option>
													<option value="群馬県">群馬県</option>
													<option value="埼玉県">埼玉県</option>
													<option value="千葉県">千葉県</option>
													<option value="東京都">東京都</option>
													<option value="神奈川県">神奈川県</option>
													<option value="新潟県">新潟県</option>
													<option value="富山県">富山県</option>
													<option value="石川県">石川県</option>
													<option value="福井県">福井県</option>
													<option value="山梨県">山梨県</option>
													<option value="長野県">長野県</option>
													<option value="岐阜県">岐阜県</option>
													<option value="静岡県">静岡県</option>
													<option value="愛知県">愛知県</option>
													<option value="三重県">三重県</option>
													<option value="滋賀県">滋賀県</option>
													<option value="京都府">京都府</option>
													<option value="大阪府">大阪府</option>
													<option value="兵庫県">兵庫県</option>
													<option value="奈良県">奈良県</option>
													<option value="和歌山県">和歌山県</option>
													<option value="鳥取県">鳥取県</option>
													<option value="島根県">島根県</option>
													<option value="岡山県">岡山県</option>
													<option value="広島県">広島県</option>
													<option value="山口県">山口県</option>
													<option value="徳島県">徳島県</option>
													<option value="香川県">香川県</option>
													<option value="愛媛県">愛媛県</option>
													<option value="高知県">高知県</option>
													<option value="福岡県">福岡県</option>
													<option value="佐賀県">佐賀県</option>
													<option value="長崎県">長崎県</option>
													<option value="熊本県">熊本県</option>
													<option value="大分県">大分県</option>
													<option value="宮崎県">宮崎県</option>
													<option value="鹿児島県">鹿児島県</option>
													<option value="沖縄県">沖縄県</option>
												</select>
											</div>
										</div>
									</div>
									<hr>
									<div class="row fuild">
										<div class="col form-row">
											<div class="caption"><span>お問い合わせ内容</span></div>
											<div class="input"><textarea id="messages" name="messages"></textarea></div>
										</div>
									</div>
									<hr>
									<div class="row fuild">
										<div class="col form-row">
											<div class="caption"><span>個人情報の取り扱いについて</span></div>
											<div class="input">
												<p class="end">下記プライバシーポリシーをご確認いただき、よろしければ「個人情報の取扱いについて同意する」にチェックをして、内容を送信してください。</p>
												<div class="rule">
													<dl>
														<dt>１．組織の名称又は氏名</dt>
														<dd>株式会社 GRIT GROUP</dd>
													</dl>
													<dl>
														<dt>２．個人情報保護管理者（若しくはその代理人）の氏名又は職名、所属及び連絡先</dt>
														<dd>藤村 寛史　　代表取締役 　 メールアドレス：info@grit-japan.co.jp　TEL：06-6606-9650</dd>
													</dl>
													<dl>
														<dt>３．個人情報の利用目的</dt>
														<dd>・各種お問い合わせ対応のため<br>
														・弊社サービスのご案内の為</dd>
													</dl>
													<dl>
														<dt>４．個人情報の取り扱い業務の委託</dt>
														<dd>個人情報の取扱業務の全部または一部を外部に業務委託する場合があります。<br>
														その際、弊社は、個人情報を適切に保護できる管理体制を敷き実行していることを条件として委託先を厳選したうえで、機密保持契約を委託先と締結し、お客様の個人情報を厳密に管理させます。</dd>
													</dl>
													<dl>
														<dt>５．個人情報の開示等の請求</dt>
														<dd>お客様は、弊社に対してご自身の個人情報の開示等（利用目的の通知、開示、内容の訂正・追加・削除、利用の停止または消去、第三者への提供の停止）に関して、当社問合わせ窓口に申し出ることができます。<br>
														その際、弊社はお客様ご本人を確認させていただいたうえで、合理的な期間内に対応いたします。<br>
														なお、個人情報に関する弊社問合わせ先は、次の通りです。<br>
														株式会社 GRIT GROUP　個人情報問合せ窓口<br>
														〒551-0031　大阪市大正区泉尾1-11-8<br>
														メールアドレス：info@grit-japan.co.jp　TEL：06-6606-9650<br>
														（受付時間　9:00～17:00  ※土・日・祝、年末年始、GW、夏期休暇を除く)</dd>
													</dl>
													<dl>
														<dt>６．個人情報を提供されることの任意性について</dt>
														<dd>お客様がご自身の個人情報を弊社に提供されるか否かは、お客様のご判断によりますが、もしご提供されない場合には、 適切なサービスが提供できない場合がありますので予めご了承ください。</dd>
													</dl>
												</div>
												<div id="privacy_checkbox">
													<input id="privacy_checkbox_input" type="checkbox">
													<label for="privacy_checkbox_input" class="text">個人情報の取扱いについて同意する</label>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="row fuild">
										<div class="col submit submit-form">
											<button id="submit-btn" class="form-submit">
												<span>相談無料！</span><br>
												「入力内容の確認」<br class="sp">へ進む
											</button>
										</div>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
	</main>
	
	<footer>
		<p class="copyright"><small>&copy;2021 Grit Group,Inc.</small></p>
		<div class="fx pc_tab">
			<div class="go-top">
				<a href="#">
					<img src="<?= get_template_directory_uri(); ?>/img/go-top.svg" alt=""><br>
				</a>
			</div>
			<a href="#form" class="btn btn--circle"><i class="far fa-envelope"></i><br>お問い合わせ<br>はコチラ<i class="fas fa-angle-down fa-position-bottom"></i></a>
		</div>
		<div id="btn-fix" class="sp">
				<a href="#form"><i class="far fa-envelope"></i> Contact</a>
				<a href="tel:06-6606-9650"><i class="fas fa-phone-volume"></i> Tel</a>
				<a href="#">Go Top</a>
		</div>
	</footer>
	</div>
	
<?php wp_footer(); ?>

<!--ここからスムーススクロール-->
<script>
$(function(){
  $('a[href^="#"]').click(function(){
    let speed = 500;
    let href= $(this).attr("href");
    let target = $(href == "#" || href == "" ? 'html' : href);
    let position = target.offset().top;
    $("html, body").animate({scrollTop:position}, speed, "swing");
    return false;
  });
});	
</script>
<!--ここまでスムーススクロール-->

<!--ここからFAQタブの折りたたみ-->
<script>
$(".faq__sub dd").hide();
$(".faq__sub dl").on("click", function(e){
    $('dd',this).slideToggle('fast');
    if($(this).hasClass('open')){
        $(this).removeClass('open');
    }else{
        $(this).addClass('open');
    }
});
</script>
<!--ここまでFAQタブの折りたたみ-->
<!--ここから固定ボタン-->
<script>
	$(function () {
  $(window).scroll(function () {
    if ($(this).scrollTop() > 300) {
      $('#btn-fix').addClass('fixed');
    } else {
      $('#btn-fix').removeClass('fixed');
    }
  });
});
</script>
<!--ここまで固定ボタン-->
</body>
</html>
