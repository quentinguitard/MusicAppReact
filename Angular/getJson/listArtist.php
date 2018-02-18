<?php
require_once('../models/GetArtists.php');	
require_once('../db.php');	
$list = new GetArtists($bdd);
header('Content-Type: application/json');
$pageSize = 10;
$currentPage = 1;
$offset = ($currentPage -1) * $pageSize;
echo  $list -> selectArtist("",$offset,$pageSize);
?>