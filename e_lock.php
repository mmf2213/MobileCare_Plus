<?php
session_start();
if(!isset($_SESSION['login_emp']))
{
	header("Location: index.php");
}
include('config.php');

$user_check=$_SESSION['login_emp'];

$ses_sql= "select * from admin where a_name='$user_check'";
$result=$conn->query($ses_sql);

$row=$result->fetch_assoc();

//echo " Welcome " .$login_session=$row['e_name'];
?>