<?php
require_once("controllers/Controller.php");
require_once('/models/GetArtists.php');	
class Artists extends Controller
{
	public function list($bdd)
	{
		$list = new GetArtists($_SESSION['mail']);
	}	
	public function detail($bdd)
	{		
		$detail = new GetArtists($_SESSION['mail']);
	}		
}
?>