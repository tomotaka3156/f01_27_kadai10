<?php
session_start();
//0.外部ファイル読み込み
include('functions.php');
// chk_ssid();

//1.  DB接続します
$pdo = db_conn();

//２．データ登録SQL作成
$stmt = $pdo->prepare('SELECT * FROM '.$table.' ORDER BY indate DESC');
$status = $stmt->execute();

//３．データ表示
$view='';
if($status==false){
  errorMsg($stmt);
}else{
  //Selectデータの数だけ自動でループしてくれる
  while( $result = $stmt->fetch(PDO::FETCH_ASSOC)){
    

    $view .= '<p>';
    $view .= '<a href="detail_nologin.php?id='.$result['id'].'">';  //更新ページへのaタグを作成
    $view .= $result['title'].'-'.'['.$result['indate'].']';
    $view .= '<div id="tes">';
    $view .= $result["bookcoment"];
    $view .= '</div>';
    $view .= '</a>';    
    $view .= '</p>';
    $view .= '<a href='.$result['titleURL'].'>';
    $view .= '<img src="'.$result['image'].'" height="200px">';
    $view .= '</a>';
    $view .= '　';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>ブック表示</title>
<link rel="stylesheet" href="css/range.css">
<link href="css/bootstrap.min.css" rel="stylesheet">
<style>div{padding: 10px;font-size:16px;}</style>
<style>#hi{background-color:skyblue}</style>
</head>
<body id="main">
<!-- Head[Start] -->
<header>
  <nav class="navbar navbar-default" id="hi">
    <div class="container-fluid">
      <div class="navbar-header">
      <a class="navbar-brand" href="login.php">ログインページ</a>
    </div>
  </nav>
</header>
<!-- Head[End] -->

<!-- Main[Start] -->
<div>
    <div class="container jumbotron"><?=$view?></div>
  </div>
</div>
<!-- Main[End] -->

</body>
</html>
