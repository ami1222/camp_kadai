<?php
// POSTでid,name,genre,access,url,commentを取得
$id      = $_POST["id"];
$name    = $_POST["name"];
$genre   = $_POST["genre"];
$access  = $_POST["access"];
$url     = $_POST["url"];
$comment = $_POST["comment"];

// DB接続
try {
$pdo = new PDO('mysql:dbname=campkadai_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

// UPDATE coffee_table SET ....; で更新(bindValue)
$sql = 'UPDATE coffee_table SET name=:name,genre=:genre,access=:access,url=:url,comment=:comment WHERE id=:id';
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':name', $name, PDO::PARAM_STR);
$stmt->bindValue(':genre', $genre, PDO::PARAM_STR);
$stmt->bindValue(':access', $access, PDO::PARAM_STR);
$stmt->bindValue(':url', $url, PDO::PARAM_STR);
$stmt->bindValue(':comment', $comment, PDO::PARAM_STR);
$stmt->bindValue(':id', $id, PDO::PARAM_INT); 
// 更新したいidを渡す
$status = $stmt->execute();

// データ登録処理後
if($status==false){
// SQL実行時にエラーがある場合（エラーオブジェクト取得して表示）
    $error = $stmt->errorInfo();
    exit("QueryError:".$error[2]);
}else{
    // wine.phpへリダイレクト
    header("Location: coffee.php");
    exit;
}
?>