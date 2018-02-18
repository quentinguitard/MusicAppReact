<?php
require_once('../models/GetGenres.php');	
require_once('../db.php');	
header('Content-Type: application/json');
$list = new GetGenres($bdd);
echo  $list->getGenre();
?>