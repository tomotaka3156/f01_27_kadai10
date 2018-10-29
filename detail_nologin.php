<?php
session_start();
include('functions.php');
// chk_ssid();

//1.GETでidを取得
if(!isset($_GET['id'])){
  exit("Error");
}
$id = $_GET['id'];

//2.DB接続など
$pdo = db_conn();

//２．データ登録SQL作成，指定したidのみ表示する
$stmt = $pdo->prepare('SELECT * FROM '. $table .' WHERE id=:id');
$stmt->bindValue(':id',$id, PDO::PARAM_INT);
$status = $stmt->execute();

//３．データ表示
if($status==false){
  // エラーのとき
  errorMsg($stmt);
}else{
  // エラーでないとき
  $rs = $stmt->fetch();
  // fetch()で1レコードを取得して$rsに入れる
  // $rsは配列で返ってくる．$rs["id"], $rs["name"]などで値をとれる
  // var_dump()で見てみよう
}


?>
<!-- htmlは「index.php」とほぼ同じです -->
<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>更新ページ</title>
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <style>div{padding: 10px;font-size:16px;}</style>
  <style>#hi{background-color:skyblue}</style>
</head>
<body>

<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default" id="hi">
    <div class="container-fluid">
    <div class="navbar-header"><a class="navbar-brand" href="select_nologin.php">ブック一覧</a></div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<form method="post" action="update.php"  enctype="multipart/form-data">
  <div class="jumbotron">
    <fieldset>
    <legend>本ブックマーク</legend>
    <table>
      <tr>
     <td><label>書籍名：</td><td><input type="text" name="name" value="<?=$rs['title']?>" disabled></td></tr>
     <tr>
     <td><label>書籍URL：</td><td><input type="text" name="URL" value="<?=$rs['titleURL']?>" disabled></td></tr>
     <tr>
     <td><label  id="ta">書籍コメント：</td><td><textArea name="coment" rows="4" cols="40" disabled><?=$rs['bookcoment']?></textArea></td></tr>
</table>
  <label><input type="file" name="upfile" accept="image/*" capture="camera" disabled></label>
     <input type="hidden" name="id" value="<?=$rs['id']?>">
    </fieldset>
  </div>
</form>
<!-- Main[End] -->
<script src="https://cdn.ckeditor.com/4.10.1/full/ckeditor.js"></script>
  <script>
      CKEDITOR.replace('coment');
      // jsではalert(CKEDITOR.instances.detail.getData());で値がとれる
  </script>

</body>
</html>
