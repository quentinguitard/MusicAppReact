<?php
require_once('../models/GetArtists.php');    
require_once('../db.php');    
$list = new GetArtists($bdd);
header('Content-Type: application/json');
echo $list -> selectArtist();
?>