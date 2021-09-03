<?php
ini_set('display_errors', 1);
require_once '../Class/Dbc.php';
$size = new Db('size');
$color = new Db('color');
$size = $size->getMessage();
$color = $color->getMessage();
?>

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
<nav class="navbar" role="navigation" aria-label="main navigation">
<a class="nabvar-item button" href="index.php"><i class="fas fa-home"></i></a>
</nav>
<div class="columns">
    <div class="column"></div>
    <div class="column">
        <p class="is-size-2">
            fruits登録
        </p>
            <form action="../Main/Fruits/create_fruits.php" method="post">
                <p>フルーツ名</p>
                <input type="text" class="input" name="fruits_name" class="fruits_name">        
                <input type="hidden" name="color_id" class="color_id" value="">
                <input type="hidden" name="size_id" class="size_id" value="">
            </form>
            <p class="is-size-3">色を選択</p>
            <p class="value_box js-color-value-box"></p>
            <div class="wrapper">
            <?php foreach ($color as $value) : ?>
                <div class="<?php echo $value['id']?> item">
                    <div class="top"style="background-color:<?php echo $value['color_key'] ?>">
                    </div>
                    <div class="bottom has-text-centered">
                        <?php echo $value['color_name'] ?>
                    </div>
                </div>
            <?php endforeach ;?>
            </div>
            <div class="size">
                <p class="is-size-3">サイズを選択</p>
                <p class="value_box"></p>
                <div class="wrapper">
                    <?php foreach ($size as $value) :?>
                        <div class="<?php echo $value['id'] ?> item has-text-centered is-size-3">
                            <?php echo $value['size_name'] ?>
                        </div>
                    <?php endforeach ;?>
                </div>
            </div>

            <div class="notification is-warning is-hidden">
 
            未記入の項目があります。
            </div>
            <button class="button is-primary is-fullwidth js-submit-target">送信</button>
    </div>
    <div class="column"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>  
</body>
</html>