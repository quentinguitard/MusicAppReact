<?php 
require_once('../db.php');  
require_once('../models/GetAlbums.php');    
header('Content-Type: application/json');
$list = new GetAlbums();
$pagenum = $_GET['page'];
$pagesize = $_GET['size'];
$offset = ($pagenum - 1) * $pagesize;
$myData = array('PortalActivity' => $list -> getList($bdd,$offset,$pagesize));
echo json_encode($myData);
?>