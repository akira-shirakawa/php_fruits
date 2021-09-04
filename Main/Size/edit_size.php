<?php
ini_set('display_errors', 1);
require_once('../../Class/Dbc.php');
$size = new Db('size');
$sql = 'update size set size_name=? where id = ?';
$stmt = $size->dbc()->prepare($sql);
$stmt->execute([$_POST['size_name'],(int)$_POST['size_id']]);
header('Location:../../View/change_size_and_color.php');
return;
