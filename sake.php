<?php
//1.  DB接続します xxxにDB名を入れます
try {
$pdo = new PDO('mysql:dbname=campkadai_db;charset=utf8;host=localhost','root','');
} catch (PDOException $e) {
  exit('データベースに接続できませんでした。'.$e->getMessage());
}

//２．データ抽出SQL作成
//作ったテーブル名を書く場所  xxxにテーブル名を入れます
$stmt = $pdo->prepare("SELECT * FROM sake_table");
$status = $stmt->execute();

//３．データ表示
$view="";
if($status==false){
  //execute（SQL実行時にエラーがある場合）
  $error = $stmt->errorInfo();
  exit("ErrorQuery:".$error[2]);
}else{
  //Selectデータの数だけ自動でループしてくれる $resultの中に「カラム名」が入ってくるのでそれを表示させる例
  while( $res = $stmt->fetch(PDO::FETCH_ASSOC)){
      $view .= '<ul id="list">';
      $view .= '<p id="name">'.$res["name"].'</p>';
      $view .= '<li id="genre">料理ジャンル　　'.$res["genre"].'</li>';
      $view .= '<li id="access">アクセス　　　　 '.$res["access"].'</li>';
      $view .= '<li id="url">url　　　　　　　 <a href="'.$res["url"].'">'.$res["url"].'</a></li>';
      $view .= '<li id="comment">コメント　　　　 '.$res["comment"].'</li>';
      $view .= "<p id='update'>";
      $view .= '<a href="view_sake.php?id='.$res["id"].'">';
      $view .= $res["Indate"];
      $view .= "更新";
      $view .= '</a>';
      $view .= "</p>";
      $view .= '</ul>';
  }
}
?>


<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List of stores I want to go</title>
     <link rel="stylesheet" href="css/style.css">
    <meta name="viewport" content="width=device-width,initial-scale=1.0,minimum-scale=1.0,user-scalable=no">
    
</head>
<body>
<div id="home">
    <div id="line3">
        <h1 id="subtitle">Sake</h1>
        <div id="line4">
             <p id="home_btn"><img src="img/home_icon.png" alt=""></p>
            <p id="wine_btn"><img src="img/wine_icon.jpg" alt=""></p>
            <p id="beer_btn"><img src="img/beer_icon.jpg" alt=""></p>
            <p id="coffee_btn"><img src="img/coffee_icon.jpg" alt=""></p>
        </div>
    </div>
    <?php echo $view; ?>
</div>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $("#home_btn").on("click", function () {
        window.location.href = "index.php";
    });
    $("#wine_btn").on("click", function () {
        window.location.href = "wine.php";
    });
    $("#beer_btn").on("click", function () {
        window.location.href = "beer.php";
    });
    $("#coffee_btn").on("click", function () {
        window.location.href = "coffee.php";
    });
</script>
</body>
</html>