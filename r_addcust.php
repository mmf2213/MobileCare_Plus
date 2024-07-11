<?php
include"r_lock.php";
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <title> Registration </title>
    <link rel="stylesheet" href="style.css">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
   </head>
<body>
  <div class="container">
    <div class="title">New Customer Entry</div>
    <div class="content">
      <form id ="reg" action="" method="POST" enctype="multipart/form-data">
        <div class="user-details">
          <div class="input-box">
            <span class="details">Customer Full Name</span>
            <input type="text" name="name" id="name" value="" placeholder="Enter Customer name" required>
          </div>
          <div class="input-box">
            <span class="details">Customer Contact No.</span>
            <input type="text" name="cont" id="cont" value="" placeholder="Enter Contact No." required>
          </div>
          <div class="input-box">
            <span class="details">Customer Email</span>
            <input type="text" name="mail" id="mail" value="" placeholder="Enter Email ID" required>
          </div>
          <div class="input-box">
            <span class="details">Customer Address</span>
            <input type="text" name="address" id="address" value="" placeholder="Enter Address" required>
          </div>
          <div class="input-box">
            <span class="details">Customer Phone Name</span>
            <input type="text" name="p_name" id="p_name" value="" placeholder="Enter Phone Name" required>
          </div>
          <div class="input-box">
            <span class="details">Customer Phone Problem</span>
            <input type="text" name="p_problem" id="p_problem" value="" placeholder="Enter Phone Problem" required>
          </div>
          <div class="input-box">
            <span class="details">Today's Date</span>
            <input type="date"name="date" id ="date" value="" required>
          </div>
          <div class="input-box">
            <span class="details">Return Date</span>
            <input type="date" name="r_date" id ="date" value="" required>
          </div>
          <div class="input-box">
            <span class="details">Upload Phone Photo</span>
            <input type="file" id="p_photo" name="p_photo" value="" required>
          </div>
          <div class="input-box">
            <span class="details">Upload Bill Receipt</span>
            <input type="file" id="b_receipt" name="b_receipt" value="" required>
          </div>
          <div class="input-box">
            <span class="details">Employee Name</span>
            <input type="text" name="e_name" id="e_name" value="" placeholder="Enter Employee Name" required>
          </div>
          <div class="input-box">
            <span class="details">Minimum Bill</span>
            <input type="text" name="t_bill" id="t_bill" value="" placeholder="Enter Minimum Bill" required>
          </div>
          
        </div>
        <div class="button">
          <input type="submit" value="Register">
        </div>
      </form>
    </div>
  </div>

</body>
</html>

<?php
 require_once("config.php");
 $Path="imageupload/";
 $valid_formats=array("jpg","png","gif","bmp","JPG","pdf","PDF");
 
 if($_SERVER['REQUEST_METHOD'] == 'POST')
 {
	$time=time(); 
	$a = $_POST['name'];
	$b = $_POST['cont'];
	$c = $_POST['mail'];
	$d = $_POST['address'];
	$e = $_POST['p_name'];
	$f = $_POST['p_problem'];
	$g = $_POST['date'];
	$h = $_POST['r_date'];
	$i = $_POST['e_name'];
	$j = $_POST['t_bill'];
	
	 $actual_image_name=$_FILES['p_photo']['name'];
	 $reimg=$time.$actual_image_name;
	 $size=$_FILES['p_photo']['size'];
	 $tmp=$_FILES['p_photo']['tmp_name'];
	 $ext=explode(".",$actual_image_name);
	 
	 $actual_pdf_name1=$_FILES['b_receipt']['name'];
	 $repdf=$time.$actual_pdf_name1;
	 $size1=$_FILES['b_receipt']['size'];
	 $tmp1=$_FILES['b_receipt']['tmp_name'];
	 $ext1=explode(".",$actual_pdf_name1);
	
	$qry ="INSERT INTO `customer`(`name`,`cont`,`mail`,`address`,`p_name`,`p_problem`,`date`,
			 `r_date`,`e_name`,`t_bill`,`p_photo`,`b_receipt`)
			 VALUES('$a','$b','$c','$d','$e','$f','$g','$h','$i','$j','$reimg','$repdf')";
	$result=$conn->query($qry);
	
	move_uploaded_file($tmp, $Path.$reimg) ;

	move_uploaded_file($tmp1, $Path.$repdf) ;
	
	 if($qry == true)
		   {
			   echo "<center>"." inserted "."</center>";
		       header("location:re_home.php");
		   }
 }
 ?>