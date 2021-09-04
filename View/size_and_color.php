<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://use.fontawesome.com/releases/v5.3.1/js/all.js" defer ></script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css" />
    <link rel="stylesheet" href="css/main.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
    <a class="navbar-item has-text-white" href="index.php"><i class="fas fa-home"></i></a>
</nav>
<div class="columns">
    <div class="column"></div>
    <div class="column">
        <p class="is-size-2">size color 登録</p>
        <div class="box">
            <form action="../Main/Color/create_color.php" method="post">
                <p>カラーネーム</p>
                <input type="text" class="input" name="color_name" required>
                <p>カラーキー(色を選択)</p>
                <input type="color" class="input" name="color_key" required>
                <input type="submit" class="button" value="送信">
            </form>
        </div>
        <div class="box">
            <form action="../Main/Size/create_size.php" method="post">
                <p>サイズ</p>
                <input type="number" class="input" name="size_name" required>               
                <input type="submit" class="button" value="送信">
            </form>
        </div>
    </div>
    <div class="column"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>  
</body>
</html>