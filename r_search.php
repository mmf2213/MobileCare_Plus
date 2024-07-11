<?php
include"r_lock.php";
?>
<html>
 <head>
 <title>  </title>
 <link rel="stylesheet" type="text/css" href="recep.css" />
 </head>
 <body>
  </br></br></br>  
  <center>
   <h1> Search the today's Delivery's </h1> 
   <form action="" method="POST">
    Search By Today' Date: <br><br>
	<input type = "date" id="searchname" name = "searchname"> <br><br>
    <input type = "submit" name = "search" value ="SEARCH" > <br> <br>
   </form>
   
<?php
require_once("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	 $search1 = $_POST["searchname"];
	 $qry = "select * from customer WHERE r_date LIKE '$search1'";
	 $result=$conn->query($qry);
	 echo "<table border='1'>
	
	<tr>
	
	<th>Name</th>
	
	<th>Contact No.</th>
	
	<th>Phone Name</th>
	
	<th>Phone Problem</th>
	
	<th>Date of Phone Submitted</th>
	
	<th>Return Date</th>
	
	<th>Phone Photo</th>
	
	<th>Bill Receipt</th>
	
	<th>Employee Name</th>
	
	<th>Phone Solution</th>
	
	<th>Total Bill</th>
	
	</tr>";
	
	while($row = $result->fetch_assoc())
	{
		?> <center> <?php
		echo "<tr>";
		
		echo "<td>" . $row['name'] . "</td>";
		
		echo "<td>" . $row['cont'] . "</td>";
		
		echo "<td>" . $row['p_name'] . "</td>";
		
		echo "<td>" . $row['p_problem'] . "</td>";
		
		echo "<td>" . $row['date'] . "</td>";
		
		echo "<td>" . $row['r_date'] . "</td>";
		
		?> <td>
		<img src="imageupload/<?php echo $row['p_photo']; ?>" height="200" width="100%">
		</img></td>
		<td>
	    <iframe src="imageupload/<?php echo $row['b_receipt']; ?>" height="200" width="100%"></iframe>
	    </td>
		<?php
		
		echo "<td>" . $row['e_name'] . "</td>";
		
		echo "<td>" . $row['p_solution'] . "</td>";
		
		echo "<td>" . $row['t_bill'] . "</td>";
		
		echo "</tr>";
		?> </center> <?php
	}
	
	echo "</table>";
	
}
?>

<br> <br> 
   <button> 
    <a href="re_home.php"> Back </a>
   </button>
  </center>
 </body>
</html>