<?php
require_once("controllers/Controller.php");
require_once('/models/GetArtists.php');	
class Artists extends Controller
{
	public function listing($bdd)
	{
		$list = new GetArtists($bdd);
		var_dump($list->getAlbums(3));
	}	
	public function detail($bdd)
	{		
		$detail = new GetArtists($bdd);
	}		
}
?>