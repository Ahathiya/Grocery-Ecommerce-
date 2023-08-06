<?php 
// Attempt MySQL server connection
$link = mysqli_connect("localhost", "root", "","shop");
 
// Check connection
if($link === false)
  {
    die("Database failed not connect");
  }
else
  {
	echo("Database connected Successfully");
  }	

if (isset($_POST['username']) and isset($_POST['password']))   
{  
        $username = $_POST['username'];                               
        $password = $_POST['password'];                                 

        $result = mysqli_query($link,"SELECT * FROM `signup` WHERE username='$username' and password='$password'") 
        or 
        die(mysqli_error());       
        $count = mysqli_num_rows($result);                 
              // if query succeeds then count=1 
        if ($count == 1)            
	          //if count=1 then username,password exists in database                                                                
        {  
		       echo"Successfully login!!!"; 
		}
	    else  
        {  
	        echo"Invalid Username or Password!!!";  
        }  
}  

?>

<html>
<head>
<style>
#dmain{
	box-shadow: 1px 5px 20px black;
    background-color:white;
    width:400px;
    height:450px;
    border-radius:10px;
    margin-left:480px;
    margin-top: 50px;"
}
input[type=text], input[type=password], text-area {  
  width: 20%;
  padding: 5px;  
  margin: 20px 0 10px 0;  
  box-shadow:0px 1px 10px  black;
  display: inline-block;  
  border:solid black;  
  background:#ffffff;
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
<title>
  <?php echo 'Login' ?>
</title>
</head>
<body style="background-image:url('img/la1.jpg');background-repeat: no-repeat; background-size: cover">
		<form method="POST" action="item.php">           
	            <h1 style="font-size:55px;color:green;text-shadow:0px 1px 10px yellow;text-align:center;font-family:Verdana,Helvetica,sans-serif;">LOGIN</h1>
	              <div id="dmain">
		      <br>
		    <center>
					<img src="img/log1.png" width="150px" height="120px"><br> <br>
			
			<input id="text" type="text" name="username" placeholder="Enter the Username" required="true"><br><br>
			<input id="text" type="password" name="password" placeholder="Password" required="true"><br><br><br>
      	
			<input id="button" type="submit" value="Login"> 
			<br> <br> <br>
			<a href="signup.php"><big><b>Create a New Account?</b></big></a>
			&emsp;&emsp;&emsp;&emsp;
			<button  style="background-color:green; height:30px"type="submit" class="Submitbtn"><a style="color:white" href="index1.php">Back</a></button><br>
			</center>
		  </div>
		</form>
</body>
</html>		