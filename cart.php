<html>
<head>
<title> Grocrey Shop</title>
</head>
<body style="background-image:url('img/la5.jpg');background-repeat: no-repeat;background-size: 1380px 700px">

<?php 
$link = mysqli_connect("localhost","root","" ,"demo");

if (!$link) 
{
    die("Connection failed: " . mysqli_connect_error());
}
else 
{
	echo "Connection successfull";
} 
if(isset($_POST['Buy']))
{
		$qt[0]= $_POST['Tomato'];
		$qt[1] = $_POST['Onion'];
		$qt[2] = $_POST['Spinach'];
		$qt[3] = $_POST['Carrot'];
		$qt[4] = $_POST['Milk'];
		$qt[5] = $_POST['Cheese'];
		$qt[6] = $_POST['Ghee'];
		$qt[7] = $_POST['Butter'];
		$qt[8] = $_POST['Maggie'];
		$qt[9] = $_POST['Kellogs'];
		$qt[10] = $_POST['Upma'];
		$qt[11] = $_POST['Noodel'];
		$qt[12] = $_POST['Oreo'];
		$qt[13] = $_POST['Darkchoco'];
		$qt[14] = $_POST['Brownie'];
		$qt[15] = $_POST['Doritex'];
		$cart = array('Tomato' => $_POST['Tomato'],
		 'Onion' => $_POST['Onion'],
		  'Spinach' => $_POST['Spinach'],
		   'Carrot' => $_POST['Carrot'], 
		    'Milk' => $_POST['Milk'], 
		     'Cheese' => $_POST['Cheese'],
		      'Ghee' => $_POST['Ghee'],
		       'Butter' => $_POST['Butter'],
		        'Maggie' => $_POST['Maggie'],
		         'Kellogs' => $_POST['Kellogs'],
		          'Upma' => $_POST['Upma'],
		           'Noodel' => $_POST['Noodel'],
		            'Oreo' => $_POST['Oreo'],
		             'Darkchoco' => $_POST['Darkchoco'],
		              'Brownie' => $_POST['Brownie'],
		               'Doritex' => $_POST['Doritex']);		

foreach($cart as $key => $value) 
{
	$check = "Update cart SET Quantity = Quantity -'$value' WHERE Name='$key'";
	$query = mysqli_query($link,$check);
		
	if($query !=0)
	{

			echo "<script>alert('Purchased Successfully !!')</script>";
			echo "<center><br><br><br><br><br><br><br><br><br><br><br><br><br><h1><b><mark>Purchased Successfully !!!</mark></b><br><br><br><br><br><br></b><br><br><br><br></h1></center>";
	}
	else
	{
			echo "<script>alert('Purchased Failed !!')</script>";
			echo "<center><br><br><br><br><br><br><br><br><br><br><br><br><br><h1 style=color:red><b><mark>Purchased Failed !!!</mark></b><br><br><br><br><br><br></b><br><br></h1></center>";
			echo "Error".mysqli_error($link); 
	}
}		

}
?>
</body>
</html>
