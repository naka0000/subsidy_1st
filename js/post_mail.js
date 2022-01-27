//just-validate.jsライブラリを使ったフロント側バリデーション
new window.JustValidate('#ajaxForm', {focusInvalidField: true})
.addRequiredGroup('#mission-category-group', 'どちらかを選択してください')
.addRequiredGroup('#uses-checkbox-group', '一つ以上選択してください')	
.addField('#name', [
    {
        rule: 'required',
        errorMessage: '必須項目です',
    },
    {
        rule: 'maxLength',
        value: 20,
        errorMessage: 'お名前/担当者名は20文字以下でご入力ください',
    },
])
.addField('#company', [
    {
        rule: 'required',
        errorMessage: '必須項目です',
    },
    {
        rule: 'maxLength',
        value: 30,
        errorMessage: '店舗名/会社名は30文字以下でご入力ください',
    },
])
.addField('#phone', [
    {
        rule: 'required',
        errorMessage: '必須項目です',
    },
	{
        rule: 'maxLength',
        value: 13,
        errorMessage: '電話番号は13文字以下でご入力ください',
    },
])
.addField('#email', [
    {
        rule: 'required',
        errorMessage: '必須項目です',
    },
    {
        rule: 'email',
        errorMessage: 'メールアドレスを正しい形式で入力してください',
    },
])
.addField('#provincial', [
    {
        rule: 'required',
        errorMessage: '必須項目です',
    },
])
.addField('#messages', [
    {
        rule: 'maxLength',
        value: 300,
        errorMessage: 'お問い合わせ内容は300文字以下でご入力ください',
    },
])
.addField('#privacy_checkbox_input', [
	{
		rule: 'required',
		errorMessage: '同意にチェックしてください',
	}
])
.onSuccess((event) => {
    insertConfirmText();
});

//バリデーション成功時(onSuccess)に発火させる関数
function insertConfirmText() {

	//各inputタグから値を取得、連想配列に格納
	var formData = {
		missionCategory: document.querySelector('input[name="checkbok"]:checked').value,
		missionUrl:      document.querySelector('input[name="group-text"]').value,
		uses:            Array.from(document.querySelectorAll('input[name="use[]"]:checked')).map(useCheckbox => useCheckbox.value),
		customerName:    document.querySelector('input[name="name"]').value,
		companyName:     document.querySelector('input[name="company"]').value,
		phone:           document.querySelector('input[name="phone"]').value,
		email:           document.querySelector('input[name="email"]').value,
		provincial:      document.querySelector('select[name="provincial"]').value,
		message:         document.querySelector('textarea[name="messages"]').value,
	};	

	//コンソールで送信データが揃ったことを表示。
	console.log(`${JSON.stringify(formData)}がセットされました。`);
	
	//確認フォームを差し込むためのHTMLを準備。
	let stringConfirmForm = `<div id="confirmText" class="fc-form">
								<div class="main">
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>ご相談項目</span></div>
											<div class="input form-value">
												<div class="form-parse-text">
													<div class="parse-line"><p>${formData.missionCategory}</p></div>
												</div>
												<div class="blk-cap">
													<p>${formData.missionUrl}</p>
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
													<div class="parse-line"><p>${formData.uses}</p></div>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>お名前 / 担当者名</span><span class="mark-require">必須</span></div>
											<div class="input form-value">
												<p>${formData.customerName}</p>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>店舗名 / 会社名</span><span class="mark-require">必須</span></div>
											<div class="input form-value">
												<p>${formData.companyName}</p>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span data-for="phone">電話番号</span><span class="mark-require">必須</span></div>
											<div class="input form-value">
												<p>${formData.phone}</p>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>メールアドレス</span><span class="mark-require">必須</span></div>
											<div class="input form-value">
												<p>${formData.email}</p>
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
												<p>${formData.provincial}</p>
											</div>
										</div>
									</div>
									<hr>
									<div class="row fuild">
										<div class="col form-row">
											<div class="caption"><span>お問い合わせ内容</span></div>
											<div class="input form-value"><p>${formData.message}</p></div>
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

	//HTMLElementに変換(appendChild関数のクラスに合わせるため。adjacentHTML関数でそのまま文字列を差し込むのはエラーの温床になるため。)			
	let confirmForm = new DOMParser().parseFromString(stringConfirmForm, "text/html").getElementById("confirmText");

	//入力フォームを非表示にして確認フォームを差し込む。ユーザーに送信準備ができたデータを表示するため。
	document.getElementById("ajaxForm").setAttribute("style", "display:none;");
	document.getElementById('mail').appendChild(confirmForm);
	setTimeout(function() {
		document.getElementById("mail").scrollIntoView({behavior:'smooth', block:'start'})
	}, 100);

	//差し込んだ確認フォームの送信ボタンに、送信処理をつける
	document.getElementById("submit").addEventListener('click', function() {
        let xhr = new XMLHttpRequest();
        xhr.onreadystatechange = function() {
			switch ( xhr.readyState ) {
				case 0:
					// 未初期化状態.
					console.log( 'uninitialized!' );
					break;
				case 1: // データ送信中.
					console.log( 'loading...' );
					break;
				case 2: // 応答待ち.
					console.log( 'loaded.' );
					break;
				case 3: // データ受信中.
					console.log( 'interactive... '+xhr.responseText.length+' bytes.' );
					break;
				case 4: // データ受信完了.
					if( xhr.status == 200 || xhr.status == 304 ) {
						var data = xhr.responseText; // responseXML もあり
						console.log( 'COMPLETE! :'+data );
						document.getElementById("ajaxForm").reset()
						document.getElementById("ajaxForm").setAttribute("style", "display:block;");
						document.getElementById("confirmText").remove();
					} else {
						console.log( 'Failed. HttpStatus: '+xhr.statusText );
					}
					break;
			}
		}
		xhr.responseType = 'text';
		xhr.open("POST", MAILFORMURL+"?action=send_mail", true);
		xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');
		xhr.send(JSON.stringify(formData));
	});

    //編集画面へ戻るボタンにフォーム再編集の処理をつける
    document.getElementById("form-back").addEventListener('click', function() {
		document.getElementById("confirmText").remove();
		document.getElementById("ajaxForm").setAttribute("style", "display:block;");
		//ひと呼吸置いてスクロールするようにして見栄えを整えるためsetTimeoutを挟む。
		setTimeout(function() {
			document.getElementById("mail").scrollIntoView({behavior:'smooth', block:'start'})
		}, 100);
	});
}
