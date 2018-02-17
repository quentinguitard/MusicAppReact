<?php
require_once("controllers/Controller.php");
require_once("models/GetAlbums.php");
class Albums extends Controller
{
	public function listing($bdd)
	{
		$list = new GetAlbums();
		var_dump($list -> getList($bdd));
	}	
	public function detail($bdd)
	{		
		$detail = new GetAlbums();
		var_dump($detail -> getDetail($bdd,1));
	}	
}
?>