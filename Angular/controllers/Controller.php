<?php
class Controller
{
	protected function view($view,$param = [])
	{
		extract($param);
		require_once("views/$view.html");
	}
}
?>