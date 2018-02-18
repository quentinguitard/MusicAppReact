<?php
require_once('../models/GetTracks.php');	
require_once('../db.php');
header('Content-Type: application/json');
$detail = new GetTracks($bdd);
$postdata = file_get_contents("php://input");
$request = json_decode($postdata);
echo $detail -> getTracks($request->id,$request->idTrack);
?>