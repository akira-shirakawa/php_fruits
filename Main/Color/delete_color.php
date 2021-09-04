<?php
ini_set('display_errors', 1);
require_once('../../Class/Dbc.php');
$color = new Db('color');
$fruits = new Db('fruits');
$data = $fruits->getData($_POST['color_id'],'color_id');
if(!$data){
    $color->delete($_POST['color_id']);
    header('Location:../../View/change_size_and_color.php');
    return;

}
session_start();
$_SESSION['error'] = 'すでに使用済みのため、削除できません';
header('Location:../../View/change_size_and_color.php');
return;