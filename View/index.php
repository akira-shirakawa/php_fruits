<?php
ini_set('display_errors', 1);
require_once '../Class/Dbc.php';
$fruits = new Db('fruits');
$color = new Db('color');
$size = new Db('size');
$fruits = $fruits->getMessage();
$length=(int)$size->getMaxSize()['max(size_name)'];
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
<nav class="navbar is-primary " role="navigation" aria-label="main navigation">
    <a class="navbar-item has-text-white" href="fruits.php">フルーツ登録</a>
    <a class="navbar-item has-text-white" href="size_and_color.php">サイズ、カラー登録</a>
    <a class="navbar-item has-text-white" href="change_size_and_color.php">サイズ、カラー編集・消去</a>
</nav>
<div class="columns">  
    <div class="column"></div>
    <div class="column is-half">
    <table class="table is-fullwidth">
        <tr><th>名前</th><th>色</th><th>サイズ</th><th>オブジェクト</th>
        <?php foreach($fruits as $value) :?>
            <tr>
                <td><?php echo $value['name'] ?></td>
                <td><?php echo $color->show($value['color_id'])['color_name'] ?></td>
                <td><?php echo $size->show($value['size_id'])['size_name']  ?></td>
                <td class="relative">
                    <div class="ab">
                    <i class="fas fa-align-justify has-text-grey"></i>
                    </div>
                    <div class="<?php echo $value['id']?> edit_form is-hidden has-text-centered	">
                        <div class="edit_item"><a href="edit_fruits.php?id=<?php echo $value['id']?>">編集</a></div>
                        <div class="edit_item edit_delete">
                            消去
                        </div>
                        <div class="edit_item edit_close">閉じる</div>
                    </div>
                    <div class="bar" style="background-color:<?php echo $color->show($value['color_id'])['color_key'] ?>;width:<?php echo (int)$size->show($value['size_id'])['size_name']/($length*0.01+0.000001) ?>%;height:30px">
                </div>
                </td>
            </tr>
        <?php endforeach ;?>
    </table>
    </div>
    <div class="column"></div>
</div>
<form action="../Main/Fruits/delete_fruits.php" method="post">
    <input type="hidden" name="id" class="edit_delete" value="">                        
</form>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>  
</body>
</html>