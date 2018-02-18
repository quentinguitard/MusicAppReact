<?php
require_once("controllers/Controller.php");
class Home extends Controller
{
	public function index()
	{
		return $this -> view("home");
	}	
}
?>