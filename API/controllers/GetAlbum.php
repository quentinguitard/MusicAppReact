<?php
require_once('../models/GetAlbums.php');    
require_once('../db.php');    
$list = new GetAlbums();
header('Content-Type: application/json');
echo $list -> getList($bdd);
?>