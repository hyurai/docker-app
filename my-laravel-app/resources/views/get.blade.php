<?php
if(!empty($_GET['comment'])){
$text = $_GET['comment'];
//スーパーグローバル変数の$_GETはHTTP GETメソッドで送信され,URLパラメーターで送られた値を取得する
echo $text;
}
//送られて格納されたデータを出力する
//form action = ""とすることで自分自身に送信する（かなり沼った）
?>
<!DOCTYPE html>
<html lang = "ja">
<head>
<meta charset = “UFT-8”>
<title>フォームからデータを受け取る</title>
</head>
<body>
<h1>フォームデータの送信</h1>
<form action = "" method = "get">

<input type = "text" name = "comment"><br/>
<input type = "submit" value = "送信">
</form>
</body>
</html>