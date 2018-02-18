<?php
require_once("controllers/Controller.php");
class Artists extends Controller
{
	public function listing($bdd)
	{
		return $this -> view("listArtist");
	}	
	public function detail($bdd)
	{		
		//$detail = new GetArtists($bdd);
		return $this -> view("detailArtist");
	}		
}
?>