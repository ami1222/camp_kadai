<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <title>List of stores I want to go</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

<!-- Main[Start] -->
<div id="wrapper">
  <h1 id="title">Store registration</h1>
<!-- ここからinsert_wine.phpにデータを送ります -->
    <form method="post" action="insert_wine.php">
      <div id="register">
        <h1 id="name">Wine</h1>
        <label>店名：<input type="text" name="name" placeholder="店名を入力" size="50"></label><br>
        <label>料理ジャンル：<input type="text" name="genre"placeholder="ジャンルを入力" size="50"></label><br>
        <label>アクセス：<input type="text" name="access"placeholder="アクセスを入力"size="50" ></label><br>
        <label>URL：<input type="url" name="url" placeholder="https://example.com"
          pattern="https://.*" size="50"></label><br>
        <label>コメント：<textArea name="comment" rows="3" cols="50" placeholder=" 詳しい説明をご記入下さい！"></textArea></label><br>
        <input type="submit" id="submit_wine" value="登録">
      </div>
    </form>

<!-- ここからinsert_sake.phpにデータを送ります -->
    <form method="post" action="insert_sake.php">
      <div id="register">
        <h1 id="name">Sake</h1>
        <label>店名：<input type="text" name="name" placeholder="店名を入力" size="50"></label><br>
        <label>料理ジャンル：<input type="text" name="genre"placeholder="ジャンルを入力" size="50"></label><br>
        <label>アクセス：<input type="text" name="access"placeholder="アクセスを入力"size="50" ></label><br>
        <label>URL：<input type="url" name="url" placeholder="https://example.com"
          pattern="https://.*" size="50"></label><br>
        <label>コメント：<textArea name="comment" rows="3" cols="50" placeholder=" 詳しい説明をご記入下さい！"></textArea></label><br>
        <input type="submit" id="submit_sake" value="登録">
      </div>
    </form>

<!-- ここからinsert_beer.phpにデータを送ります -->
    <form method="post" action="insert_beer.php">
      <div id="register">
        <h1 id="name">Beer</h1>
        <label>店名：<input type="text" name="name" placeholder="店名を入力" size="50"></label><br>
        <label>料理ジャンル：<input type="text" name="genre"placeholder="ジャンルを入力" size="50"></label><br>
        <label>アクセス：<input type="text" name="access"placeholder="アクセスを入力"size="50" ></label><br>
        <label>URL：<input type="url" name="url" placeholder="https://example.com"
          pattern="https://.*" size="50"></label><br>
        <label>コメント：<textArea name="comment" rows="3" cols="50" placeholder=" 詳しい説明をご記入下さい！"></textArea></label><br>
        <input type="submit" id="submit_beer" value="登録">
      </div>
    </form>

<!-- ここからinsert_coffee.phpにデータを送ります -->
    <form method="post" action="insert_coffee.php">
      <div id="register">
        <h1 id="name">Coffe & Tea</h1>
        <label>店名：<input type="text" name="name" placeholder="店名を入力" size="50"></label><br>
        <label>料理ジャンル：<input type="text" name="genre"placeholder="ジャンルを入力" size="50"></label><br>
        <label>アクセス：<input type="text" name="access"placeholder="アクセスを入力"size="50" ></label><br>
        <label>URL：<input type="url" name="url" placeholder="https://example.com"
          pattern="https://.*" size="50"></label><br>
        <label>コメント：<textArea name="comment" rows="3" cols="50" placeholder=" 詳しい説明をご記入下さい！"></textArea></label><br>
        <input type="submit" id="submit_coffee" value="登録">
      </div>
    </form>
</div>
<!-- Main[End] -->
<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $("#submit_wine").on("click", function () {
        window.location.href = "insert_wine.php";
    });
     $("#submit_sake").on("click", function () {
        window.location.href = "insert_sake.php";
    });
    $("#submit_beer").on("click", function () {
        window.location.href = "insert_beer.php";
    });
    $("#submit_coffee").on("click", function () {
        window.location.href = "insert_coffee.php";
    });
</script>

</body>
</html>