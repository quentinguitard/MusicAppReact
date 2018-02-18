<?php 
require_once('../db.php');  
require_once('../models/GetAlbums.php');    
header('Content-Type: application/json');
$list = new GetAlbums();
$pagenum = $_GET['page'];
$pagesize = $_GET['size'];
$offset = ($pagenum - 1) * $pagesize;

$sql = "SELECT count(*) as count FROM albums";
$result = $bdd->query($sql);
$row = $result->fetch(PDO::FETCH_ASSOC);
$count = $row['count'];
$myData = array('PortalActivity' => $list -> getList($bdd,$offset,$pagesize), 'totalCount' => $count);
echo json_encode($myData);
?>