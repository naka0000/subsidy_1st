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

	//各inputタグから値を取得。
	let missionCategory = "";
	let missionCategoryRadio = document.querySelector('input[name="checkbok"]:checked');
	if(missionCategoryRadio !== null){
		missionCategory = missionCategoryRadio.value;
	}
	let missionUrl = document.querySelector('input[name="group-text"]').value;
	let uses = [];
	let useCheckboxes = document.querySelectorAll('input[name="use[]"]:checked');
	for (var i = 0; i < useCheckboxes.length; i++) {
		uses.push(useCheckboxes[i].value);
	}
	let customerName = document.querySelector('input[name="name"]').value;
	let companyName = document.querySelector('input[name="company"]').value;
	let phone = document.querySelector('input[name="phone"]').value;
	let email = document.querySelector('input[name="email"]').value;
	let provincial = document.querySelector('select[name="provincial"]').value;
	let message = document.querySelector('textarea[name="messages"]').value;
	
	//差し込みたいHTMLをテキストで記載。
	let stringConfirmForm = `<div id="confirmText" class="fc-form">
								<div class="main">
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>ご相談項目</span></div>
											<div class="input form-value">
												<div class="form-parse-text">
													<div class="parse-line"><p>${missionCategory}</p></div>
												</div>
												<div class="blk-cap">
													<p>${missionUrl}</p>
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
													<div class="parse-line"><p>${uses}</p></div>
												</div>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>お名前 / 担当者名</span><span class="mark-require">必須</span></div>
											<div class="input form-value">
												<p>${customerName}</p>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>店舗名 / 会社名</span><span class="mark-require">必須</span></div>
											<div class="input form-value">
												<p>${companyName}</p>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span data-for="phone">電話番号</span><span class="mark-require">必須</span></div>
											<div class="input form-value">
												<p>${phone}</p>
											</div>
										</div>
									</div>
									<hr>
									<div class="row">
										<div class="col form-row">
											<div class="caption"><span>メールアドレス</span><span class="mark-require">必須</span></div>
											<div class="input form-value">
												<p>${email}</p>
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
												<p>${provincial}</p>
											</div>
										</div>
									</div>
									<hr>
									<div class="row fuild">
										<div class="col form-row">
											<div class="caption"><span>お問い合わせ内容</span></div>
											<div class="input form-value"><p>${message}</p></div>
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
        let xhr = new XMLHttpRequest();
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

		//入力フォームの再表示
		document.getElementById("ajaxForm").reset();
		document.getElementById("ajaxForm").setAttribute("style", "display:block;");
		document.getElementById("confirmText").remove();
	});

    //編集画面へ戻るボタンにクリックのコールバック関数をつける
    document.getElementById("form-back").addEventListener('click', function() {
		document.getElementById("confirmText").remove();
		document.getElementById("ajaxForm").setAttribute("style", "display:block;");
		setTimeout(function() {
			document.getElementById("mail").scrollIntoView({behavior:'smooth', block:'start'})
		}, 100);
	});
}
