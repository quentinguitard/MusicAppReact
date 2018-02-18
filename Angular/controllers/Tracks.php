<?php
require_once("controllers/Controller.php");
class Tracks extends Controller
{
	public function detail()
	{		
		return $this -> view("tracks");
	}	
}
?>