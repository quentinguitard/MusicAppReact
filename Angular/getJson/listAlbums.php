<?php
require_once('../models/GetAlbums.php');	
require_once('../db.php');	
$list = new GetAlbums();
header('Content-Type: application/json');
$pageSize = 10;
$currentPage = 1;
$offset = ($currentPage -1) * $pageSize;
echo  json_encode($list -> getList($bdd,$currentPage,$pageSize));
?>