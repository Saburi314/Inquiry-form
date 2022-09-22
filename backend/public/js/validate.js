// バリデーションカウンター
    var validateCount = 0;
// バリデーションがすべてクリアの場合のカウント
    var validateClearCount = 5;
    var isSubmit = false;

    window.addEventListener('DOMContentLoaded', () => {
        // 「送信」ボタンの要素を取得
        const submit = document.querySelector('.submit');
        // 「送信」ボタンの要素にクリックイベントを設定する
        submit.addEventListener('click', (e) => {

            // 「名前」入力欄のチェック
            nameCheck();
            // 「メールアドレス」入力欄のチェック
            emailCheck();
            // 「電話番号」入力欄の形式チェック
            telCheck();
            // 「性別」入力欄のチェック
            genderCheck();
            // 「問い合わせ内容」入力欄のチェック
            contextCheck();

            if (validateCount == validateClearCount) {
                // すべてのバリデーションを通過した場合
                //　二重送信防止チェック
                doubleSubmitCheck();
            } else {
                //いずれかのバリデーションを通過できなかった場合
                // デフォルトアクションをキャンセル
                e.preventDefault();
                // カウントを初期化
                validateCount = 0;
            }
        });
    });

// 「名前」入力欄チェック
    function nameCheck() {
        // フォームの要素を取得
        const name = document.querySelector('#name');
        // エラーメッセージを表示させる要素を取得
        const errMsgName = document.querySelector('.err-msg-name');
        if (!name.value) {
            // エラーメッセージのテキスト
            errMsgName.textContent = '名前が入力されていません';
        } else {
            // エラーメッセージのテキストに空文字を代入
            errMsgName.textContent = '';
            validateCount++;
        }
    }

// 「メールアドレス」入力欄チェック
    function emailCheck() {
        // フォームの要素を取得
        const email = document.querySelector('#email');
        // エラーメッセージを表示させる要素を取得
        const errMsgEmail = document.querySelector('.err-msg-email');
        // 正規を設定
        const regex_email = /.+@.+\..+/;

        if (!email.value) {
            // エラーメッセージのテキスト
            errMsgEmail.textContent = 'メールアドレスが入力されていません';
        } else {
            // 正規表現の判定
            if (!email.value.match(regex_email)) {
                // エラーメッセージのテキスト
                errMsgEmail.textContent = 'メールアドレスを正しい形式で入力してください';
            } else {
                // エラーメッセージのテキストに空文字を代入
                errMsgEmail.textContent = '';
                validateCount++;
            }
        }
    }

// 「電話番号」入力欄チェック
    function telCheck() {
        // フォームの要素を取得
        const tel = document.querySelector('#tel');
        // エラーメッセージを表示させる要素を取得
        const errMsgTel = document.querySelector('.err-msg-tel');
        // 正規表現を設定
        // ハイフンを含めた〇〇〇-△△△-×××の形式
        const regex_with_hyphen = /^[0-9]{3}-[0-9]{4}-[0-9]{4}$/;

        // 電話番号に入力がある場合
        if (tel.value) {
            // 正規表現にマッチしない場合
            if (!tel.value.match(regex_with_hyphen)) {
                // エラーメッセージのテキスト
                errMsgTel.textContent = '電話番号を正しい形式で入力してください';
            } else {
                // 正規表現にマッチした場合
                // エラーメッセージのテキストに空文字を代入
                errMsgTel.textContent = '';
                validateCount++;
            }
        } else {
            // 電話番号に入力がない場合
            validateCount++;
        }
    }

// 「性別」入力欄チェック
    function genderCheck() {
        var flag = false;

        // いずれかのラジオボタンが選択されていれば、フラグをtrue
        for (var i = 0; i < document.inquiry_form.gender.length; i++) {
            if (document.inquiry_form.gender[i].checked) {
                flag = true;
            }
        }
        // エラーメッセージを表示させる要素を取得
        const errMsgGender = document.querySelector('.err-msg-gender');

        if (!flag) {
            // ラジオボタンが選択されていない場合
            // エラーメッセージのテキスト
            errMsgGender.textContent = '性別を選択してください';
        } else {
            // エラーメッセージのテキストに空文字を代入
            errMsgGender.textContent = '';
            validateCount++;
        }
    }

// 「問い合わせ内容」入力欄チェック
    function contextCheck() {
        // フォームの要素を取得
        const context = document.querySelector('#context');
        // エラーメッセージを表示させる要素を取得
        const errMsgContext = document.querySelector('.err-msg-context');
        if (!context.value) {
            // エラーメッセージのテキスト
            errMsgContext.textContent = '問い合わせ内容が入力されていません';
        } else {
            // エラーメッセージのテキストに空文字を代入
            errMsgContext.textContent = '';
            validateCount++;
        }
    }

// 二重送信防止チェック
    function doubleSubmitCheck() {
        if (isSubmit) {
            //フラグがtrueならアラートを表示してsubmitしない
            alert("処理中です。");
            return false;
        } else {
            //フラグがtrueでなければ、フラグをtrueにした上でsubmitする
            isSubmit = true;
            return true;
        }
    }
