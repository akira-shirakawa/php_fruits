<?php
ini_set('display_errors', 1);
require_once '../Class/Dbc.php';
session_start();
$error = $_SESSION['error'] ?? '';
$_SESSION = array();
session_destroy();
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
    <div class="modal modal-color">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <form action="../Main/Color/edit_color.php" method="post">
                    <p>カラーネーム</p>
                    <input type="text" class="input" name="color_name" required>
                    <p>カラーキー(色を選択)</p>
                    <input type="color" class="input" name="color_key" required>
                    <input type="hidden" name="color_id" value="">
                    <input type="submit" class="button narrow_form" value="送信">
                </form>
                <form action="../Main/Color/delete_color.php" method="post" id="color-delete">
                    <input type="hidden" name="color_id" value="">
                </form>
                <button class="button is-danger color-delete"><i class="fas fa-trash-alt"></i></button>

            </div>
        </div>
    </div>
    <div class="modal modal-size">
        <div class="modal-background"></div>
        <div class="modal-content">
            <div class="box">
                <form action="../Main/Size/edit_size.php" method="post">
                    <p>サイズ</p>
                    <input type="number" class="input" name="size_name" required>               
                    <input type="submit" class="button narrow_form"  value="送信">
                    <input type="hidden" name="size_id" value="">
                </form>
                <form action="../Main/Size/delete_size.php" id="size-delete" method="post">
                    <input type="hidden" name="size_id" value="">
                </form>
                <button class="button is-danger size-delete"><i class="fas fa-trash-alt"></i></button>
            </div>
        </div>
    </div>
<nav class="navbar is-primary" role="navigation" aria-label="main navigation">
<a class="navbar-item has-text-white" href="index.php"><i class="fas fa-home"></i></a>
</nav>
<div class="columns">
    <div class="column"></div>
    <div class="column">
        <p class="is-size-2">
            Size,Color変更・削除
        </p>
    <?php if($error) :?>
        <div class="notification is-danger">
            <?php echo $error ?>
        </div>
    <?php endif; ?>
            <p class="is-size-3">色を選択</p>
           
            <div class="wrapper">
            <?php foreach ($color as $value) : ?>
                <div class="<?php echo $value['id']?> item color-item">
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
               
                <div class="wrapper">
                    <?php foreach ($size as $value) :?>
                        <div class="<?php echo $value['id'] ?> item has-text-centered  size-item">
                            <?php echo $value['size_name'] ?>
                        </div>
                    <?php endforeach ;?>
                </div>
            </div>

        
    </div>
    <div class="column"></div>
</div>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script type="text/javascript" src="js/main.js"></script>  
<script type="text/javascript" src="js/change_size_and_color.js"></script>
</body>
</html>