<?php
require_once("controllers/Controller.php");
require_once("models/GetTracks.php");
class Tracks extends Controller
{
	public function listing($bdd)
	{
		$list = new GetTracks($bdd);
		var_dump($list->getTracks(1));
	}	
	public function detail($bdd)
	{		
		$detail = new GetTracks();
	}	
}
?>