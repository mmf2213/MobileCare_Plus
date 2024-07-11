<?php
include"e_lock.php";
?>

<html>
<head>
 <link rel="stylesheet" type="text/css" href="employee.css" />
</head>
<body>
<br><br>
<center>
<form id = "upd" action = "" method = "POST">
     <h2> Update Customer phone additional info. </h2>
	 
	 <p> Enter Customer details below </p>
	 <input type="text" name="name" id="name" value="" placeholder="Enter Customer Name"> <br><br>
	 <input type="text" name="p_solution" id="p_solution" value="" placeholder="Enter Phone Problem Solution"> <br><br>
	 <input type="text" name="t_bill" id="t_bill" value="" placeholder="Enter Total Bill"> <br><br>
	 
	 <button type="submit"> Submit </button>
	 
	 </form>
</center>
</body>
</html>

<?php
require_once("config.php");
if($_SERVER["REQUEST_METHOD"]== 'POST')

{
    $name=$_POST['name'];
	$p_solution=$_POST['p_solution'];
	$t_bill=$_POST['t_bill'];
	
	$qry="UPDATE `customer` SET `p_solution` = '$p_solution' ,`t_bill` = '$t_bill' 
	WHERE `name` = '$name' ";
	$result=$conn->query($qry);
	if($qry == true)
	{
		echo "Updated";
		header("location:e_search.php");
	}
	else
	{
		echo "not".mysql_error();
	}
}
?>