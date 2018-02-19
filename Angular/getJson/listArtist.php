<?php
require_once('../models/GetArtists.php');	
require_once('../db.php');	
header('Content-Type: application/json');
$list = new GetArtists($bdd);
echo  $list -> selectArtist();
?>