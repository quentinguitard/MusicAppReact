<?php
require_once('../models/GetTracks.php');    
require_once('../db.php');
$list = new GetTracks($_GET['id']);
header('Content-Type: application/json');
echo $list -> getDetail($bdd);

?>