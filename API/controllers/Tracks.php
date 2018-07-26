<?php
require_once("controllers/Controller.php");
require_once("/models/GetTracks.php");
class Tracks extends Controller
{
	public function detail($bdd)
	{		
		$detail = new GetTracks();
		var_dump($detail->getTracks($_GET['id']));
	}	
}
?>