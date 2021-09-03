<?php
ini_set('display_errors', 1);
require_once('../../Class/Dbc.php');
$size = new Db('fruits');
$size->create(['name'=>$_POST['fruits_name'],'color_id'=>$_POST['color_id'],'size_id'=>$_POST['size_id']]);
header('Location:../../View/fruits.php');
return;