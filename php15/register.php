<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>新規ユーザー登録</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <h1>新規ユーザー登録</h1>
    <form action="register_process.php" method="POST">
        <label for="lastname_kanji">苗字（漢字・英字）<span class="required">*必須</span></label>
        <input type="text" id="lastname_kanji" name="lastname_kanji" required>

        <label for="firstname_kanji">名前（漢字・英字）<span class="required">*必須</span></label>
        <input type="text" id="firstname_kanji" name="firstname_kanji" required>

        <label for="lastname_kana">苗字（カタカナ）<span class="required">*必須</span></label>
        <input type="text" id="lastname_kana" name="lastname_kana" required>

        <label for="firstname_kana">名前（カタカナ）<span class="required">*必須</span></label>
        <input type="text" id="firstname_kana" name="firstname_kana" required>

        <label for="organization">所属機関・会社名<span class="required">*必須</span></label>
        <input type="text" id="organization" name="organization" required>

        <label for="organization_code">所属機関・会社コード<span class="required">*必須</span></label>
        <input type="text" id="organization_code" name="organization_code" required>

        <label for="employee_number">社員番号<span class="required">*必須</span></label>
        <input type="text" id="employee_number" name="employee_number" required>

        <label for="tel1">TEL①<span class="required">*必須</span></label>
        <input type="tel" id="tel1" name="tel1" required>

        <label for="tel2">TEL②</label>
        <input type="tel" id="tel2" name="tel2">

        <label for="email">メールアドレス（社用・ログイン用）<span class="required">*必須</span></label>
        <input type="email" id="email" name="email" required>

        <label for="password">ログイン用パスワード<span class="required">*必須</span>（半角英数字10字以上20字以内）</label>
        <input type="password" id="password" name="password" required>

        <label for="personal_email">メールアドレス（個人）</label>
        <input type="email" id="personal_email" name="personal_email">

        <label for="address_prefecture">住所（都道府県）<span class="required">*必須</span></label>
        <input type="text" id="address_prefecture" name="address_prefecture" required>

        <label for="address_city">住所（市区町村）<span class="required">*必須</span></label>
        <input type="text" id="address_city" name="address_city" required>

        <label for="address_detail">住所（番地以降）<span class="required">*必須</span></label>
        <input type="text" id="address_detail" name="address_detail" required>

        <label for="address_building">住所（建物名）</label>
        <input type="text" id="address_building" name="address_building">

        <button type="submit">ユーザー登録</button>
        <button type="button" onclick="window.location.href='index.php'">ログイン画面に戻る</button>
    </form>
</body>
</html>
