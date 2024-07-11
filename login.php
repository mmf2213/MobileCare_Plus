<html>
 <head>
  <title> </title>
 <head>
 <body>
  <br><br><br><br><br><br>
  <center>
   <form action="" method="POST">
    <h2> LOG IN <h2>
	<input type="text" id="username" name="username" value="" placeholder="Enter your username"><br><br>
	<input type="password" id="password" name="password" value="" placeholder="Enter your password"><br><br>
	<select style="margin-bottom: 10px;" id="type" name="type">
	       <option value="">Please Select Role</option>
		   <option value="">Admin</option>
		   <option value="">Reception</option>
		   <option value="">Employee</option>
    </select>
	<br><br>
	<button type="submit">Log In</button>
   </form>	   
  </center>
 </body>
</html>

<?php
include("config.php");
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$myusername=$_POST['username'];
	$mypassword=$_POST['password'];
	$password=md5($mypassword); //Encrypted Password
	$type=$_POST['type'];
	if($type==1)
	{
		$sql="SELECT * FROM `admin` WHERE a_name='$myusername' or a_cont='$myusername'
		                               AND a_pass='$password'";
	    
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$id=$row['a_id'];
		$count=mysql_num_rows($result);
		
		if($count==1)
		{
			$_SESSION['login_admin']=$id;
			
			header("location:a_home.php");
		}
		else
		{
			$error="Your Login Name or Password is invalid";
		}
	}
	elseif($type==2)
	{
		$sql="SELECT * FROM `reception` WHERE r_name='$myusername' or r_cont='$myusername'
		                               AND r_pass='$password'";
	    
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$id=$row['r_id'];
		$count=mysql_num_rows($result);
		
		if($count==1)
		{
			$_SESSION['login_reception']=$id;
			
			header("location:r_home.php");
		}
		else
		{
			$error="Your Login Name or Password is invalid";
		}
	}elseif($type==3)
	{
		$sql="SELECT * FROM `employee` WHERE e_name='$myusername' or e_cont='$myusername'
		                               AND e_pass='$password'";
	    
		$result=mysql_query($sql);
		$row=mysql_fetch_array($result);
		$id=$row['e_id'];
		$count=mysql_num_rows($result);
		
		if($count==1)
		{
			$_SESSION['login_reception']=$id;
			
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