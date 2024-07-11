<html>
 <head>
  <title>  </title>
  <link rel="stylesheet" type="text/css" href="Home.css" />
 </head>
 <body>
 <br><br><br>
  <center>
  <form action="" method="POST"> 
   <h2>Log In</h2>
   <input type="text" id="username" name="username" value="" placeholder="username"><br><br>
   <input type="password" id="password" name="password" value="" placeholder="password"><br><br>
   <select style="margin-bottom: 10px;" id="type" name="type">
			<option value="">Please Select Role</option>
			<option value="1">Admin</option>
			<option value="2">Receptionist</option>
			<option value="3">Employee</option>
		</select> 
		<br><br>
		<button type="submit">Log In</button>
   </form>
  </center>
  </form>
 </body>
</html>

<?php
include("config.php");
session_start();
//error_reporting(0);
if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$myusername=$_POST['username'];
	$mypassword=$_POST['password'];
	$password=md5($mypassword); //Encrypted Password
	$type=$_POST['type'];
    if($type==1)
	{
		$sql="SELECT * FROM admin WHERE a_name='$myusername' AND a_pass='$password'";

		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		$id=$row['a_id'];
		$status=$row['a_flag'];
		$count=mysqli_num_rows($result);
		
		if($count==1 && $status==1)
		{
			$_SESSION['login_admin']=$id;
			
			header("location:a_home.php");
		}
		else
		{
			$error="Your Login Name or Password is invalid";
		}
	}
	elseif($type == 2)
	{
		$sql="SELECT * FROM admin WHERE a_name='$myusername' AND a_pass='$password'";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		$id=$row['a_id'];
		$status=$row['a_flag'];
		$count=mysqli_num_rows($result);
		
		if($count==1 && $status==2)
		{
			$_SESSION['login_recep']=$id;
			
			header("location:re_home.php");
		}
		else
		{
			$error="Your Login Name or Password is invalid";
		}
	}
	elseif($type == 3)
	{
		$sql="SELECT * FROM admin WHERE a_name='$myusername' AND a_pass='$password'";
		$result=$conn->query($sql);
		$row=$result->fetch_assoc();
		$id=$row['a_id'];
		$status=$row['a_flag'];
		$count=mysqli_num_rows($result);
		
		if($count==1 && $status==3)
		{
			$_SESSION['login_emp']=$id;
			
			header("location:e_search.php");
		}
		else
		{
			$error="Your Login Name or Password is invalid";
		}
	}
	else
	{
       $error="Sorry, Please Fill All Information ";
	}
}
?>