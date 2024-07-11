<?php
include"a_lock.php";
?>

<html>
 <head>
 <title>  </title>
 <link rel="stylesheet" type="text/css" href="admin.css" />
 </head>
 <body>
  </br></br></br>  
  <center>
   <form action="" method="POST">
    <h1> Welcome To Home Page </h1>
    <button> 
    <a href="a_addemp.php"> Add New Employee </a>
    </button>
	<button> 
    <a href="a_addrecep.php"> Add New Receptionist </a>
    </button>
	</br></br>
    search By User Value: <br><br> 
    <input type="date" name = "searchname1"><br><br> 
	<input type="date" name = "searchname2"><br><br>  
    <input type="submit" name = "search" value = "SEARCH" > <br>
   </form>

<?php
require_once("config.php");
if($_SERVER["REQUEST_METHOD"] == "POST")
{
	 $search1 = $_POST["searchname1"];
	 $search2 = $_POST["searchname2"];
	 $qry= "SELECT * FROM customer WHERE date BETWEEN '$search1' AND  '$search2' ";
	 $result=$conn->query($qry);
	 $qry1= "SELECT sum(t_bill) FROM customer WHERE date BETWEEN '$search1' AND  '$search2' ";
	 $result1=$conn->query($qry1);
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
	
	while($row = $result1->fetch_assoc())
	 { 
         echo "<tr>";
		 
		 echo "<th> Total is : </th>";	
		 
		 echo "<td>".$row["sum(t_bill)"]."</td>";	
		 
		 echo "</tr>";
	 }
	
	echo "</table>";
}
?>

<br><br>
<button> 
    <a href="a_logout.php"> Log Out </a>
    </button>
  </center>
 </body>
</html>