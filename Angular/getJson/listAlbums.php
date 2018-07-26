<?php
require_once('../models/GetAlbums.php');	
require_once('../db.php');	
header('Content-Type: application/json');
$list = new GetAlbums();
echo  json_encode($list -> getList($bdd));
?>