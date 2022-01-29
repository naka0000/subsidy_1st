//just-validate.jsライブラリを使ったフロント側バリデーション
new window.JustValidate('#ajaxForm')
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
		missionCategory: document.querySelector('input[name="checkbok"]:checked') == null ? '' : document.querySelector('input[name="checkbok"]:checked').value,
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
													<div class="parse-line"><p>${formData.uses.join(" / ")}</p></div>
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
	let confirmForm = new DOMParser().parseFromString(stringConfirmForm, "text/html").querySelector("html body").firstElementChild;

	//入力フォームを非表示にして確認フォームを差し込む。ユーザーに送信準備ができたデータを表示するため。
	document.getElementById("ajaxForm").setAttribute("style", "display:none;");
	setTimeout(function() {
		document.getElementById("form").scrollIntoView({behavior:'smooth', block:'start'})
	}, 10);
	document.getElementById('mail').appendChild(confirmForm);
	insertTitleText('<p>以下の内容でよろしいですか？</p>');

	//差し込んだ確認フォームの送信ボタンに、送信処理をつける
	document.getElementById("submit").addEventListener('click', function() {
		let submitButton = document.getElementById("submit");
		submitButton.disabled = true;
		submitButton.style.opacity = 0.5;
        let xhr = new XMLHttpRequest();
		xhr.onloadstart = function() {
			console.log( 'データ送信中...' );
		}
		xhr.progress = function() {
			console.log( 'データ受信中... '+xhr.responseText.length+' bytes.' );
		}
		xhr.onload = function() {
			var data = xhr.responseText;
			if(xhr.responseText.includes('エラー')){
				let timeout = 4000;
				autoDisappearModal(data, timeout);
				setTimeout(function () {
					submitButton.disabled = false;
					submitButton.style.opacity = 1;
				}, timeout);
			} else {
				insertTitleText(data);
				document.getElementById('submitButtonGroup').parentElement.style.visibility = "hidden";
				setTimeout(function() {
					document.getElementById("form").scrollIntoView({behavior:'smooth', block:'start'})
				}, 100);
			}
		}
		xhr.onerror = function() {
			let timeout = 4000;
			autoDisappearModal('<p>通信エラーが発生しました<br>通信状況の良い場所で再度お試しください。</p>', 4000);
			setTimeout(function () {
				submitButton.disabled = false;
				submitButton.style.opacity = 1;
			}, timeout);
		}
		xhr.onloadend = function() {
			// do nothing
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
			document.getElementById("form").scrollIntoView({behavior:'smooth', block:'start'})
		}, 100);
	});
}

function insertTitleText(htmlDoneMessage) {
	let newSectionTitle = new DOMParser().parseFromString(htmlDoneMessage, "text/html").querySelector("html body").firstElementChild;
	let oldSectionTitle = document.querySelector('#section-title');
	newSectionTitle.setAttribute('id', 'section-title');
	newSectionTitle.classList = oldSectionTitle.classList;
	oldSectionTitle.parentElement.replaceChild(newSectionTitle, oldSectionTitle);
}


function autoDisappearModal (message, timeout) {
	/**
	 * 自動的に消えるポップアップ関数
	 */
	//モーダルを作って差し込み
	let stringModalDialog = `<div id="modalWrap" style="{display: none; background: none; width: 100%; height: 100%; position: fixed; top: 0; left: 0; z-index: 100; overflow: hidden;}">
								<div class="modalBox" id="modalBox" style="position: fixed; width: 85%; max-width: 420px; height: 0; top: 0; bottom: 0; left: 0; right: 0; margin: auto; overflow: hidden; opacity: 1; display: none; border-radius: 3px; z-index: 1000;">
									<div class="modalInner" id="modalInner" style="padding: 10px; text-align: center; box-sizing: border-box; background: rgba(0, 0, 0, 0.7); color: #fff;">
									${message}
									</div>
								</div>
							</div>`
	let modalDialog = new DOMParser().parseFromString(stringModalDialog, "text/html").querySelector("html body").firstElementChild;
	document.querySelector('html body').appendChild(modalDialog);
	let modal = document.getElementById('modalBox');
	fadeIn(modal, 200);
	//メッセージの高さによってモーダルのサイズを調整。
	let messageHeight = document.getElementById("modalInner").clientHeight;
	modal.style.height = messageHeight + "px";
	//2秒後に自動的に消滅する 
	setTimeout(function () {
		fadeOut(modal, 200);
		setTimeout(function() {
			document.getElementById('modalWrap').remove();
		}, 200);
	}, timeout);
};


function fadeIn(node, duration) {
	/**
	 * JQuery非依存のフェードイン関数
	 */
	// display: noneでないときは何もしない
	if (getComputedStyle(node).display !== 'none') {
		return;
	}
		// style属性にdisplay: noneが設定されていたとき
	if (node.style.display === 'none') {
		node.style.display = '';
	} else {
		node.style.display = 'block';
	}
	node.style.opacity = 0;
  	var start = performance.now();
	requestAnimationFrame(function tick(timestamp) {
	  // イージング計算式（linear）
		var easing = (timestamp - start) / duration;
		// opacityが1を超えないように
		node.style.opacity = Math.min(easing, 1);
		// opacityが1より小さいとき
		if (easing < 1) {
			requestAnimationFrame(tick);
		} else {
			node.style.opacity = '';
		}
	});
}

function fadeOut(node, duration) {
	/**
	 * JQuery非依存のフェードアウト関数
	 */
	node.style.opacity = 1;
	var start = performance.now();
	requestAnimationFrame(function tick(timestamp) {
		// イージング計算式（linear）
		var easing = (timestamp - start) / duration;
		// opacityが0より小さくならないように
		node.style.opacity = Math.max(1 - easing, 0);
		// イージング計算式の値が1より小さいとき
		if (easing < 1) {
			requestAnimationFrame(tick);
		} else {
			node.style.opacity = '';
			node.style.display = 'none';
		}
	});
}

