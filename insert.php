<?php
    mb_internal_encoding("utf8");
    $pdo = new PDO("mysql:dbname=lesson01; host=localhost;","root","");

    $sql = "INSERT INTO contactform (name, mail, age, comment)VALUES(?,?,?,?)";
    $stmt = $pdo->prepare($sql);
    
    $stmt-> bindValue(1, $_POST['userName']);
    $stmt-> bindValue(2, $_POST['mail']);
    $stmt-> bindValue(3, $_POST['age']);
    $stmt-> bindValue(4, $_POST['comment']);

    $stmt->execute();

?>

<!DOCTYPE HTML>
<html lang="ja">

<head>
    <meta charset= "UTF-8">
    <title>お問い合わせフォーム</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <h1 class="title">お問合わせが完了しました</h1>

    <div class="content">
        <div>お問い合わせありがとうございました。</div>
        <div>3営業日以内に担当者よりご連絡差し上げます。</div>
    </div>

</body>
 </html>