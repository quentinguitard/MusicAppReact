<?php
require_once("controllers/Controller.php");
class Artists extends Controller
{
	public function listing()
	{
		return $this -> view("listArtist");
	}	
	public function detail()
	{		
		return $this -> view("detailArtist");
	}		
}
?>