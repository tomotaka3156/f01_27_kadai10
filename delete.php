<?php
include('functions.php');
//1.POSTでParamを取得
$id = $_GET['id'];

//2.DB接続など
$pdo = db_conn();

//3．データ削除SQL作成
$stmt = $pdo->prepare('DELETE FROM '. $table .' WHERE id=:id');
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

//4．データ登録処理後
if($status==false){
  errorMsg($stmt);
}else{
  //select.phpへリダイレクト
  header('Location: select.php');
  exit;
}

?>
