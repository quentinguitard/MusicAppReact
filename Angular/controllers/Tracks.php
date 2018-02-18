<?php
require_once("controllers/Controller.php");
class Tracks extends Controller
{
	public function detail($bdd)
	{		
		return $this -> view("tracks");
	}	
}
?>