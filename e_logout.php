<?php
session_start();

if(isset($_SESSION['login_emp']))
{
	unset($_SESSION['login_emp']);
	
	//session_destroy();
	if(!isset ($_SESSION['login_emp']))
	{
		header("Location:index.php");
	}
}

?>