<?php
// POSTデータ取得
$lastname_kanji = $_POST['lastname_kanji'];
$firstname_kanji = $_POST['firstname_kanji'];
$lastname_kana = $_POST['lastname_kana'];
$firstname_kana = $_POST['firstname_kana'];
$organization = $_POST['organization'];
$organization_code = $_POST['organization_code'];
$employee_number = $_POST['employee_number'];
$tel1 = $_POST['tel1'];
$tel2 = $_POST['tel2'];
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT);  // パスワードをハッシュ化
$personal_email = $_POST['personal_email'];
$address_prefecture = $_POST['address_prefecture'];
$address_city = $_POST['address_city'];
$address_detail = $_POST['address_detail'];
$address_building = $_POST['address_building'];

// DB接続
try {
    // PDOでデータベースに接続するためのコード
    $pdo = new PDO(
        'mysql:dbname=nadefnadef_genzaichi01;charset=utf8;host=mysql3101.db.sakura.ne.jp', 
        'nadefnadef_genzaichi01', 
        'genzaichi01'
    );

    // エラーモードを設定（例外を投げるようにする）
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    echo "データベースに正常に接続できました！";  // 成功時のメッセージ

} catch (PDOException $e) {
    // データベース接続エラー時の処理
    echo 'DB接続エラー: ' . $e->getMessage();
}


// データ登録
$stmt = $pdo->prepare("INSERT INTO users2 (lastname_kanji, firstname_kanji, lastname_kana, firstname_kana, organization, organization_code, employee_number, tel1, tel2, email, password, personal_email, address_prefecture, address_city, address_detail, address_building) VALUES (:lastname_kanji, :firstname_kanji, :lastname_kana, :firstname_kana, :organization, :organization_code, :employee_number, :tel1, :tel2, :email, :password, :personal_email, :address_prefecture, :address_city, :address_detail, :address_building)");
$stmt->bindValue(':lastname_kanji', $lastname_kanji);
$stmt->bindValue(':firstname_kanji', $firstname_kanji);
$stmt->bindValue(':lastname_kana', $lastname_kana);
$stmt->bindValue(':firstname_kana', $firstname_kana);
$stmt->bindValue(':organization', $organization);
$stmt->bindValue(':organization_code', $organization_code);
$stmt->bindValue(':employee_number', $employee_number);
$stmt->bindValue(':tel1', $tel1);
$stmt->bindValue(':tel2', $tel2);
$stmt->bindValue(':email', $email);
$stmt->bindValue(':password', $password);
$stmt->bindValue(':personal_email', $personal_email);
$stmt->bindValue(':address_prefecture', $address_prefecture);
$stmt->bindValue(':address_city', $address_city);
$stmt->bindValue(':address_detail', $address_detail);
$stmt->bindValue(':address_building', $address_building);

$status = $stmt->execute(); // SQL実行

// 結果処理
if ($status === false) {
    $error = $stmt->errorInfo();
    exit("Error:".$error[2]);
} else {
    // 成功時はログインページへリダイレクト
    header('Location: index.php');
    exit;
}
