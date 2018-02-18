<?php
require_once("controllers/Controller.php");
class Albums extends Controller
{
	public function listing()
	{
		return $this -> view("listAlbum");
	}	
	public function detail()
	{		
		return $this -> view("detailAlbum");
	}	
}
?>