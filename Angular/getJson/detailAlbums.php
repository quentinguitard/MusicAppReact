<?php
require_once('../models/GetAlbums.php');	
require_once('../db.php');
header('Content-Type: application/json');
$detail = new GetAlbums();
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
echo $detail -> getDetail($bdd,$request->id);
?>