<?php
require_once("controllers/Controller.php");
require_once("controllers/GetTracks.php");
class Tracks extends Controller
{
	public function list($bdd)
	{
		$list = new GetTracks($_SESSION['mail']);
	}	
	public function detail($bdd)
	{		
		$detail = new GetTracks($_SESSION['mail']);
	}	
}
?>