<?php
require_once("controllers/Controller.php");
require_once("controllers/GetAlbums.php");
class Albums extends Controller
{
	public function list($bdd)
	{
		$list = new GetAlbums($_SESSION['mail']);
	}	
	public function detail($bdd)
	{		
		$detail = new GetAlbums($_SESSION['mail']);
	}	
}
?>