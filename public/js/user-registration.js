// user-registration.js

$(document).ready(function() {
    // フォーム送信時のイベントハンドラ
    $('#user-registration-form').on('submit', function(event) {
        // バリデーションチェックを実行
        if (!validateForm()) {
            event.preventDefault(); // フォーム送信をキャンセル
        }
    });

    // バリデーションチェック関数
    function validateForm() {
        var isValid = true;

        // 名前の入力チェック
        if ($('#name').val().trim() === '') {
            $('#name').addClass('is-invalid');
            isValid = false;
        } else {
            $('#name').removeClass('is-invalid');
        }

        // メールアドレスの入力チェック
        if ($('#email').val().trim() === '') {
            $('#email').addClass('is-invalid');
            isValid = false;
        } else {
            $('#email').removeClass('is-invalid');
        }

        // パスワードの入力チェック
        if ($('#password').val().trim() === '') {
            $('#password').addClass('is-invalid');
            isValid = false;
        } else {
            $('#password').removeClass('is-invalid');
        }

        // パスワード確認の入力チェック
        if ($('#password-confirm').val().trim() === '') {
            $('#password-confirm').addClass('is-invalid');
            isValid = false;
        } else {
            $('#password-confirm').removeClass('is-invalid');
        }

        return isValid;
    }
});