<?php
session_start();
require_once('db.php');
$_controller = isset($_GET['controller']) ? $_GET['controller'] : 'home';
$_action = isset($_GET['action']) ? $_GET['action'] : 'index';
$controller_name = ucfirst($_controller);
if(file_exists("controllers/".$controller_name.".php"))
{
	require_once("controllers/".$controller_name.".php");	
	if(class_exists($controller_name))
	{
		$controller = new $controller_name();
		if(method_exists($controller,$_action))
		{
			if($_action == "show")
				$controller -> {$_action}();
			else
				$controller -> {$_action}($bdd);
		}
		else
		{
			die("Method $_action not found in $controller_name.");
		}
	}
	else
	{
		die("Class $controller_name not found.");
	}
}
else
{
	die("$controller_name.php file not found.");
}
?>