<?php
require_once("controllers/Controller.php");
class Albums extends Controller
{
	public function listing($bdd)
	{
		return $this -> view("listAlbum");
		//var_dump($list -> getList($bdd));
	}	
	public function detail($bdd)
	{		
		return $this -> view("detailAlbum");
		//var_dump($detail -> getDetail($bdd,1));
	}	
}
?>