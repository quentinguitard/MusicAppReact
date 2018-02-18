<?php
require_once("controllers/Controller.php");
class Genres extends Controller
{
	public function listing()
	{
		return $this -> view("listGenre");
	}	
	public function detail()
	{
		return $this -> view("detailGenre");
	}	
}
?>