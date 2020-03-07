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
   <h1 id="title">List of stores I want to go</h1> 
   <p id="naiyou">各drinkに合いそうな私が行きたいお店をピックアップしてみました。</p>
   <div id="line1">
        <div id="wine">
            <p id="home_text">Wine</p>    
        </div>
        <div id="sake">
            <p id="home_text">Sake</p>
        </div>
   </div>
   <div id="line2">
        <div id="beer">
            <p id="home_text">Beer</p>
        </div>
        <div id="coffee">
            <p id="home_text">Coffee and Tea</p>
        </div>
   </div>
</div>

<!-- JQuery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
    $("#wine").on("click", function () {
        window.location.href = "wine.php";
    });
    $("#sake").on("click", function () {
        window.location.href = "sake.php";
    });
    $("#beer").on("click", function () {
        window.location.href = "beer.php";
    });
    $("#coffee").on("click", function () {
        window.location.href = "coffee.php";
    });
</script>
</body>
</html>