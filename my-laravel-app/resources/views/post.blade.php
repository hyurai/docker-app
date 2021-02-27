<?php
if(!empty($_POST['text1'])){
$test = $_POST["text1"];
//$_POSTもスーパーグローバル変数！違うところはurlに入力した情報が表示されるかされないか。ログイン画面などは$_POSTを使うべき
echo $test;
}
?>
<!DOCTYPE html>
<html lang = "ja">
<head>
  <meta charset = “UFT-8”>
  <title>フォームからデータを受け取るPOSTver</title>
</head>
<body>
<h1>フォームデータの送信</h1>
<form action = "" method = "post">
  @csrf
  <input type = "text" name = "text1"><br/>
  <input type = "submit" value = "送信">
</form>
</body>
</html>