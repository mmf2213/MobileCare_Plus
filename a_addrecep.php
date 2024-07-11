<?php
include"a_lock.php";
?>

<html>
<head>
<link rel="stylesheet" type="text/css" href="admin.css" />
<script type="text/javascript" src="js/jquery.min.js"></script>
<script type="text/javascript" src="js/jquery.validate.min.js"></script>
<!-- end validation js -->
<script type="text/javascript">
//form validation rules
$(document).ready(function(){
            $("#rform").validate({
			    rules: {
				    name: "required",
					cont:{
						required:true,
					    minlength:10,
					    number:true                           					
					},
					pass:{
						required:true,
					    minlength:5,
					    number:true
					}
				},
				messages:{
					name:"Please enter full Name",
					cont:{
						required:"Please enter contact",
						minlength:"Contact should be 10 digits",
						number:"Please enter valid No."
					},
					pass:{
						required:"Please enter password",
						minlength:"Password should be 8 digits",
						number:"Please enter numbers only"
					}
				},
				submitHandler: function(form) {
					alert("Data is Correct");
					form.submit();
				}
});
});
</script>

</head>
<body background ="" width = "150%" height= "150%">
<center>

  <form id ="rform" action="" method="POST">
  </br></br>
   <h1> Add new Receptionist </h2>
   <p><i>Enter new receptionist details below </i></p>
   <input type="text" name="name" id="name" value="" placeholder="Enter Receptionist  Name"></br></br>
   <input type="text" name="cont" id="cont" maxlength="10" value="" placeholder="Enter Contact No."></br></br>
   <input type="password" name="pass" id="pass" value="" placeholder="Enter Password"></br></br>
   
   <input type="reset" name="reset"  value="reset">
   <button type="Submit"> Submit </button></br></br>
   
  </form>
</center>
</body>
</html>
   

<?php
require_once("config.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $a = $_POST['name'];
	$b = $_POST['cont'];
	$c = md5($_POST['pass']);
	$d = 2; //Receptionist Flag No.
	
	$qry = "INSERT INTO `admin`(`a_name`, `a_cont`, `a_pass`, `a_flag`) 
	                 VALUES ('$a' ,'$b' ,'$c' , '$d')";
	$result=$conn->query($qry);
	
	if($qry == true)
	   {
		   echo "<center>"."  inserted"."</center>";
		   header("location:a_home.php");
	   }
	   else
	   {
		   echo "not".mysql_error();
	   }
}
?>
	