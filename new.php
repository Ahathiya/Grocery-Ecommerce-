<?php
// Attempt MySQL server connection
$con = mysqli_connect("localhost", "root", "","demo");
 
// Check connection
if($con === false)
  {
    die("Database failed not connect");
  }
else
  {
	echo("Database connected Succesufully");
  }	

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
	 //something was posted
	 $Name = $_POST['Name'];
	 $Price = $_POST['Price'];
	 $Quantity = $_POST['Quantity'];
	 
	 
	 if(!empty($Name)&& !empty($Price)&& !empty($Quantity)&& !is_numeric($Name))
	 {
 		//save to database
		$query="INSERT INTO cart(Name,Price,Quantity)VALUES('$Name','$Price','$Quantity')";		   
	    mysqli_query($con,$query); 
		echo"<script>alert('Your details Succesufully Submitted!!')</script>";
	}
	else
	 {
		 echo"<script>alert('Please enter some Valid Information!')</script>";
	 } 
}
?>
<html>
<head>
<title> Details </title>
</head>
<body>
<center>
<form method="post">
Name<input type="text" name="Name" maxlength="50"> <br> <br>
Price<input type="text" name="Price" maxlength="50"> <br> <br>
Quantity<input type="text" name="Quantity" maxlength="50"> <br> <br>
<button type="submit" class="Submitbtn">Submit</button> 
</form>
</center>
</body>
</html>


	 
