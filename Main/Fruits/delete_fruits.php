<?php
ini_set('display_errors', 1);
require_once('../../Class/Dbc.php');
$fruits = new Db('fruits');
$fruits->delete($_POST['id']);
header('Location:../../View/index.php');
return;