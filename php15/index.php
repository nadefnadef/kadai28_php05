<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ログイン</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>ログイン</h1>
    <div class="login-container">
        <div class="login-box">
            <label for="login-email">ログインメールアドレス</label>
            <input type="email" id="login-email" placeholder="例:1234*****@gmail.com">
            <label for="login-password">パスワード</label>
            <input type="password" id="login-password">
            <p>※半角英数字10字以上20字以内（半角、全角、スペースも認識されますのでご注意ください。）</p>
            <a href="password_reset.php" style="color: red;">パスワードをお忘れの方</a>
            <button id="login-btn">メールアドレスでログイン</button>
        </div>

        <div class="social-login-box">
            <button class="line-btn" onclick="window.location.href='line_login.php'">LINEでログイン</button>
            <button class="linkedin-btn" onclick="window.location.href='linkedin_login.php'">LinkedInでログイン</button>
            <button class="guesthinan-btn" onclick="window.open('https://nadefnadef.sakura.ne.jp/php09/index.php', '_blank')">閲覧モードで使用する（個人向け避難ルート機能）</button>
            <button class="guestjichitai-btn" onclick="window.open('https://nadefnadef.github.io/kadai28_js2/', '_blank')">閲覧モードで使用する（自治体・法人向け情報集約画面）</button>
            <p>*ユーザー登録をせずに機能のみ閲覧ご希望の場合</p>
        </div>
    </div>
    <div class="first-time">
        <p>初めての方へ</p>
        <hr class="decorative-line">
    </div>
    <button class="new-user-btn" onclick="window.location.href='register.php'">新規ユーザー登録</button>
</body>
</html>
