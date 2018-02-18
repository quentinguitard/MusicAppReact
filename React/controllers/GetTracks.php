<?php
require_once('../models/GetTracks.php');    
require_once('../db.php');
$list = new GetTracks($bdd);
header('Content-Type: application/json');
echo $list -> getTracks($_GET['id']);
?>