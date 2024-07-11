<?php
session_start();

if(isset($_SESSION['login_recep']))
{
	unset($_SESSION['login_recep']);
	
	//session_destroy();
	if(!isset ($_SESSION['login_recep']))
	{
		header("Location:index.php");
	}
}

?>