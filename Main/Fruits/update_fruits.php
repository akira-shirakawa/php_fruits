<?php
ini_set('display_errors', 1);
require_once('../../Class/Dbc.php');
$fruits = new Db('fruits');
var_dump([$_POST['fruits_name'],$_POST['color_id'],$_POST['size_id'],$_POST['id']]);
$sql = 'update fruits set name=?,color_id=?, size_id=? where id = ?';
$stmt = $fruits->dbc()->prepare($sql);
$stmt->execute([$_POST['fruits_name'],(int)$_POST['color_id'],(int)$_POST['size_id'],(int)$_POST['id']]);
header('Location:../../View/index.php');
return;
