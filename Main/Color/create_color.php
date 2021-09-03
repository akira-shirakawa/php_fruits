
<?php
ini_set('display_errors', 1);
require_once('../../Class/Dbc.php');
$size = new Db('color');
$size->create(['color_name'=>$_POST['color_name'],'color_key'=>$_POST['color_key']]);
header('Location:../../View/size_and_color.php');
return;