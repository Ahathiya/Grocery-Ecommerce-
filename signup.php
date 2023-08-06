<?php 
// Attempt MySQL server connection
$link = mysqli_connect("localhost", "root", "","demo");
 
// Check connection
if($link === false)
  {
    die("Database failed not connect");
  }
else
  {
	echo("Database connected Successfully");
  }	

if($_SERVER['REQUEST_METHOD'] == "POST")
	{
		//something was posted
	 $username = $_POST['username'];
	 $email_id = $_POST['email_id'];
	 $password = $_POST['password'];
	 
	   if(!empty($username)&& !empty($email_id)&& !empty($password)&& !is_numeric($username))
	   {
 		//save to database
		$query="insert into signup(username,email_id,password) values('$username','$email_id','$password')";		   
	    mysqli_query($link,$query); 
		echo"Successfully Sign Up!!!";   
	   }
	   else
	   {
		 echo"Please enter some Valid Information!!1";
	   }
} 
?>
<html>
<head>
	<title>Signup</title>
	
<style>	
#drig
{
    font-family: Verdana;
	border-top-right-radius:15px;
    border-bottom-right-radius:15px;
    height:500px;
    width:400px;
    padding:40px ;
	box-shadow:2px 10px 20px  black;
	background-color:white;
    margin-left:400px;
    
}
#text{
        height: 25px;
		border-radius: 5px;
		padding: 4px;
		border: solid thin black;
		box-shadow:0px 1px 10px  black;
	    width:90%;
}

#button{
        font-size:20px;
		padding: 10px;
		width: 100px;
		color: white;
		background-color:blue;
		border: none;
}

</style>
</head>
<body style="background-image:url('img/grocery.jpg');background-repeat: no-repeat; background-size: cover">
		<form method="POST" action="item.php">
             <br> <br> 
		        <div id="drig">
                  <div align="center" style="font-size:30px; font-family:cooper black">Sign Up Here</div>
				<br> <br>
		    <big>Username</big><br><br><input id="text" type="text" name="username" placeholder="Enter the Username" required="true"><br><br>
			<big>Email ID</big><br><br><input id="text" type="text" name="email_id"placeholder="Enter the email_id" required="true"><br><br>
			<big>Password</big><br><br><input id="text" type="password" name="password" placeholder="Password" required="true"><br><br><br>
      	
			<input id="button" type="submit" value="Signup"> 
			<br> <br> <br>
			<a href="login.php"><big><b>Already have a Account?</b></big></a>
			&emsp;&emsp;&emsp;
			<button  style="background-color:green; height:30px"type="submit" class="Submitbtn"><a style="color:white" href="index1.php">Back</a></button><br>
			
		  </div>
		</form>
</body>
</html>