<?php
require_once('../models/GetGenres.php');	
require_once('../db.php');	
header('Content-Type: application/json');
$detail = new GetGenres($bdd);
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
echo $detail -> getDetailGenre($request->id);
?>