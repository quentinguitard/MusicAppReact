<?php
require_once("controllers/Controller.php");
require_once("controllers/GetGenres.php");
class Genres extends Controller
{
	public function list($bdd)
	{
		$list = new GetGenres($_SESSION['mail']);
	}	
	public function detail($bdd)
	{		
		$detail = new GetGenres($_SESSION['mail']);
	}	
}
?>