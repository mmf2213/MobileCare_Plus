<?php
session_start();

if(isset($_SESSION['login_admin']))
{
	unset($_SESSION['login_admin']);
	
	//session_destroy();
	if(!isset ($_SESSION['login_admin']))
	{
		header("Location:index.php");
	}
}

?>