<?php
// GETでid値を取得
$id = $_GET["id"];

// DB接続など
try {
$pdo = new PDO('mysql:dbname=campkadai_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

// SELECT * FROM sake_table WHERE id=:id;
$sql = "SELECT * FROM sake_table WHERE id=:id";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':id', $id, PDO::PARAM_INT);
$status = $stmt->execute();

// データ表示 sake
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
} else {
    // データのみ抽出の場合はwhileループで取り出さない
    $row = $stmt->fetch();
}
?>

<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>List of stores I want to go</title>
  <link rel="stylesheet" href="cms/style.css">
</head>
<body>

<!-- Main[Start] -->
<div id="wrapper">
  <h1 id="title">Store registration</h1>
<!-- ここからinsert_wine.phpにデータを送ります -->
<!-- 関係ない -->
    <form method="post" action="insert_wine.php">
      <div id="register">
        <h1 id="name">Wine</h1>
        <label>店名：<input type="text" name="name" placeholder="店名を入力" size="50"></label><br>
        <label>料理ジャンル：<input type="text" name="genre" placeholder="ジャンルを入力" size="50"></label><br>
        <label>アクセス：<input type="text" name="access" placeholder="アクセスを入力"size="50" ></label><br>
        <label>URL：<input type="url" name="url" placeholder="https://example.com"
          pattern="https://.*" size="50"></label><br>
        <label>コメント：<textArea name="comment" rows="3" cols="50" placeholder=" 詳しい説明をご記入下さい！"></textArea></label><br>
        <input type="submit" id="submit_wine" value="更新">
      </div>
    </form>

<!-- ここからupdate_sake.phpにデータを送ります -->
    <form method="post" action="update_sake.php">
      <div id="register">
        <h1 id="name">Wine</h1>
        <label>店名：<input type="text" name="name" value="<?=$row["name"]?>" placeholder="店名を入力" size="50"></label><br>
        <label>料理ジャンル：<input type="text" name="genre" value="<?=$row["genre"]?>" placeholder="ジャンルを入力" size="50"></label><br>
        <label>アクセス：<input type="text" name="access" value="<?=$row["access"]?>" placeholder="アクセスを入力"size="50" ></label><br>
        <label>URL：<input type="url" name="url" value="<?=$row["url"]?>" placeholder="https://example.com"
          pattern="https://.*" size="50"></label><br>
        <label>コメント：<textArea name="comment" rows="3" cols="50" placeholder=" 詳しい説明をご記入下さい！"><?=$row["comment"]?></textArea></label><br>
        <input type="hidden" name="id" value="<?=$row["id"]?>">
        <input type="submit" id="submit_wine" value="更新">
      </div>
    </form>

<!-- ここからinsert_beer.phpにデータを送ります -->
<!-- 関係ない -->
    <form method="post" action="insert_beer.php">
      <div id="register">
        <h1 id="name">Beer</h1>
        <label>店名：<input type="text" name="name" placeholder="店名を入力" size="50"></label><br>
        <label>料理ジャンル：<input type="text" name="genre"placeholder="ジャンルを入力" size="50"></label><br>
        <label>アクセス：<input type="text" name="access"placeholder="アクセスを入力"size="50" ></label><br>
        <label>URL：<input type="url" name="url" placeholder="https://example.com"
          pattern="https://.*" size="50"></label><br>
        <label>コメント：<textArea name="comment" rows="3" cols="50" placeholder=" 詳しい説明をご記入下さい！"></textArea></label><br>
        <input type="submit" id="submit_beer" value="更新">
      </div>
    </form>

<!-- ここからinsert_coffee.phpにデータを送ります -->
<!-- 関係ない -->
    <form method="post" action="insert_coffee.php">
      <div id="register">
        <h1 id="name">Coffe & Tea</h1>
        <label>店名：<input type="text" name="name" placeholder="店名を入力" size="50"></label><br>
        <label>料理ジャンル：<input type="text" name="genre"placeholder="ジャンルを入力" size="50"></label><br>
        <label>アクセス：<input type="text" name="access"placeholder="アクセスを入力"size="50" ></label><br>
        <label>URL：<input type="url" name="url" placeholder="https://example.com"
          pattern="https://.*" size="50"></label><br>
        <label>コメント：<textArea name="comment" rows="3" cols="50" placeholder=" 詳しい説明をご記入下さい！"></textArea></label><br>
        <input type="submit" id="submit_coffee" value="更新">
      </div>
    </form>
</div>
<!-- Main[End] -->
</body>
</html>