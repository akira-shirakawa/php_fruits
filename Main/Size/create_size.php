<?php
ini_set('display_errors', 1);
require_once('../../Class/Dbc.php');
$size = new Db('size');
$size->create(['size_name'=>$_POST['size_name'],'size_key'=>$_POST['size_key']]);
header('Location:../../View/size_and_color.php');
return;