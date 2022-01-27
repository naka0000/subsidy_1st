//confirmButtonでPOST送信が行われないようにする。
document.getElementById("confirmButton").addEventListener('click', function(e) {
	e.preventDefault();
});

//confirmButtonにコールバック関数を追加
document.getElementById("confirmButton").addEventListener('click', function() {
	//差し込みたいHTMLをテキストで記載。
	let stringConfirmForm = `<div id="confirmText" class="fc-form">
								<div class="main">
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>ご相談項目</span></div>
											<div class="input form-value">
												<div class="form-parse-text">
													<div class="parse-line"><p>ホームページを新規制作</p></div>
												</div>
												<div class="blk-cap">
													<p>http://gritgroup.co.jp/</p>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption" data-for="use" data-join=","><span>補助金用途</span><span class="mark-require">必須</span></div>
											<div class="input form-value">
												<div class="form-parse-text">
													<div class="parse-line"><p>販促</p></div>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>お名前 / 担当者名</span><span class="mark-require">必須</span></div>
											<div class="input form-value">
												<p>田中 太郎</p>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>店舗名 / 会社名</span><span class="mark-require">必須</span></div>
											<div class="input form-value">
												<p>株式会社GRIT GROUP</p>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span data-for="phone">電話番号</span><span class="mark-require">必須</span></div>
											<div class="input form-value">
												<p>06-6606-9650</p>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>メールアドレス</span><span class="mark-require">必須</span></div>
											<div class="input form-value">
												<p>info@grit-japan.co.jp</p>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption">
												<span>都道府県</span>
												<span class="mark-require">必須</span></div>
											<div class="input form-value">
												<p>大阪府</p>
											</div>
										</div>
									</div>
									<hr>
									<div class="row fuild">
										<div id="submitButtonGroup" class="col submit submit-confirm">
											 <button id="submit" type="submit" class="form-submit">この内容で送信する</button>
											 <button id="form-back" type="reset" class="form-back">入力画面に戻る</button>
										</div>
									</div>
								</div>`;
	//入力フォームの非表示化
	document.getElementById("ajaxForm").setAttribute("style", "display:none;");

	//そのまま文字列を差し込みたくないので、HTMLElementに変換。
	let parser = new DOMParser();						
	let documentConfirmForm = parser.parseFromString(stringConfirmForm, "text/html");
	let elementConfirmForm = documentConfirmForm.getElementById("confirmText");

	//確認フォームの差し込み
	document.getElementById('mail').appendChild(elementConfirmForm);
	setTimeout(function() {
		document.getElementById("mail").scrollIntoView({behavior:'smooth', block:'start'})
	}, 100);

	//差し込んだ確認フォームの送信ボタンに、送信処理のコールバック関数をつける
	document.getElementById("submit").addEventListener('click', function() {
        let missionCategory = "";
        let missionCategoryRadio = document.querySelector('input[name=checkbok]:checked');
        if(missionCategoryRadio !== null){
            missionCategory = missionCategoryRadio.value;
        }
        console.log("相談項目:" + missionCategory);
        let missionUrl = document.querySelector('input[name=group-text]').value;
        console.log("相談URL:" + missionUrl);
        let uses = [];
        let useCheckboxes = document.querySelectorAll('input[name=use]:checked');
        for (var i = 0; i < useCheckboxes.length; i++) {
            uses.push(useCheckboxes[i].value);
        }
        console.log("用途:" + uses);
        let customerName = document.querySelector('input[name=name]').value;
        console.log("お客様名:" + customerName);
        let companyName = document.querySelector('input[name=company]').value;
        console.log("会社名:" + companyName);
        let phone = document.querySelector('input[name=phone]').value;
        console.log("電話:" + phone);
        let email = document.querySelector('input[name=email]').value;
        console.log("メール:" + email);
        let provincial = document.querySelector('select[name=provincial]').value;
        console.log("都道府県:" + provincial);
        let message = document.querySelector('textarea[name=messages]').value;
        console.log("内容:" + message);

        var xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
        // Establishment
        console.log("送信中です..." + xhr.statusText);
        } else {
        // NOT Establishment
        console.log("送信できていません" + xhr.statusText );
        }
    }
    xhr.onload = function(){
        console.log("送信が完了しました" + xhr.responseText);
        // document.getElementById("form-check").remove();
        // document.forms[0].reset();
    }
    xhr.responseType = 'text';
    xhr.open("POST", MAILFORMURL, true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
    xhr.send("action=send_mail" + "&missionCategory=" + missionCategory + "&missionUrl=" + missionUrl + "&uses=" + uses + "&customerName=" + customerName +"&companyName=" + companyName +"&phone=" + phone +"&email=" + email +"&provincial=" + provincial +"&message=" + message);
    });

    //TODO 編集画面へ戻るボタンにクリックのコールバック関数をつける
    document.getElementById("form-back").addEventListener('click', function() {});

});
