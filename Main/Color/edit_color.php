<?php
ini_set('display_errors', 1);
require_once('../../Class/Dbc.php');
$color = new Db('color');
$sql = 'update color set color_name=?,color_key=? where id = ?';
$stmt = $color->dbc()->prepare($sql);
$stmt->execute([$_POST['color_name'],$_POST['color_key'],(int)$_POST['color_id']]);
header('Location:../../View/change_size_and_color.php');
return;
