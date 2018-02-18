<?php
require_once('../models/Getartists.php');	
require_once('../db.php');
header('Content-Type: application/json');
$detail = new GetArtists($bdd);
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
echo $detail -> getAlbums($request->id);
?>