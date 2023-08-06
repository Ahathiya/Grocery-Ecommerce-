<html>
<head>
<style>  
body{  font-size:20px ; 
       text-shadow:0px 1px 10px yellow;
} 
.info{
        width:73%;
		height:370%;
		background-image:url('img/bar.png');background-repeat: no-repeat;background-size: 2100px 2900px;
		padding: 8px 15px 8px 15px;
		margin: 10px 0px 15px 0px;
		box-shadow: 1px 5px 15px grey;
		border: 5px solid black;
		border-radius:10px;
        
}
</style>
<title> <?php echo"PRODUCT DETAILS" ?></title>
</head>
<body style="background-image:url('img/grocery.jpg');background-repeat: no-repeat;background-size: 2100px 2900px;">

<center>

<div class="info">

<h1 style="text-align:center; color:maroon;font-family:cooperblack"><big><u> PRODUCT </u></big></h1>
<form action="cart.php" method="POST">
		 <br>
<h1 align="center" HEIGHT="70px" width="70px" style="color:red;font-family:cooper black">VEGETABLE</h1>          
         <pre><h2 style="font-style:italic;">Tomato        Onion         Spinach       Carrot </h2></pre> 
			<img src="img\tomato.jpg" width=200 height=200>&emsp;&emsp;
			<img src="img\onion.jpg" width=200 height=200>&emsp;&emsp;
			<img src="img\spinach.jpg" width=200 height=200>&emsp;&emsp;
			<img src="img\carrot.jpg" width=200 height=200>&emsp;&emsp;
	   	 <br>
             Price = 80/kg&emsp;Qty = 120&emsp;
			 Price = 100/kg&emsp;Qty = 150&emsp;&emsp;
			 Price = 50&emsp;Qty = 40&emsp;&emsp;
			 Price = 60/kg&emsp;Qty = 50
		 <br><br>
&emsp;<input type="number" name="Tomato" value="0">&emsp;&emsp;&emsp;
<input type="number" name="Onion" value="0">&emsp;&emsp;&emsp;
<input type="number" name="Spinach" value="0">&emsp;&emsp;&emsp;
<input type="number" name="Carrot" value="0">
<br> <br> <br> <br>

<h1 align="center" HEIGHT="70px" width="70px" style="color:red;font-family:cooper black">DAIRY PRODUCT</h1>
		 <pre><h2 style="font-style:italic;">Milk       Cheese          Ghee         Butter </h2></pre> 
			<img src="img\milk.jpg" width=200 height=200>&emsp;&emsp;
			<img src="img\cheese.jpeg" width=200 height=200>&emsp;&emsp;
			<img src="img\ghee.jpg" width=200 height=200>&emsp;&emsp;
			<img src="img\butter.jpg" width=200 height=200>&emsp;&emsp;
		 <br>
             Price = 50/lt&emsp;Qty = 200&emsp;&emsp;&emsp;
			 Price = 120&emsp;Qty = 80&emsp;&emsp;&emsp;
			 Price = 150/lt&emsp;Qty = 100&emsp;&emsp;&emsp;
			 Price = 90&emsp;Qty = 70
		  <br><br>
&emsp;<input type="number" name="Milk" value="0">&emsp;&emsp;&emsp;
<input type="number" name="Cheese" value="0">&emsp;&emsp;&emsp;
<input type="number" name="Ghee" value="0">&emsp;&emsp;&emsp;
<input type="number" name="Butter" value="0">
<br> <br> <br> <br>

<h1 align="center" HEIGHT="70px" width="70px" style="color:red;font-family:cooper black">READY TO EAT PRODUCT</h1>
        <pre><h2 style="font-style:italic;">   Maggie         Kellogs         Upma        Noodel </h2></pre> 
			
			<img src="img\maggi.jpg" width=200 height=200>&emsp;&emsp;
			<img src="img\kellogs.jpg" width=200 height=200>&emsp;&emsp;
			<img src="img\upma.png" width=200 height=200>&emsp;&emsp;
			<img src="img\hakka noodel.jpg" width=200 height=200>&emsp;&emsp;       
		<br>
             Price = 80&emsp;Qty = 90&emsp;&emsp;&emsp;
			 Price = 150&emsp;Qty = 80&emsp;&emsp;&emsp;
			 Price = 60&emsp;Qty = 45&emsp;&emsp;&emsp;
			 Price = 100 &emsp; Qty = 75
        <br><br>
&emsp;<input type="number" name="Maggie" value="0">&emsp;&emsp;&emsp;
<input type="number" name="Kellogs" value="0">&emsp;&emsp;&emsp;
<input type="number" name="Upma" value="0">&emsp;&emsp;&emsp;
<input type="number" name="Noodel" value="0">
<br> <br> <br> <br>

<h1 align="center" HEIGHT="70px" width="70px" style="color:red;font-family:cooper black">SNACK</h1>
	   <pre><h2 style="font-style:italic;">  Oreo         Darkchoco       Brownie        Doritex </h2></pre> 
	   
     		<img src="img\oreo.jpg" width=200 height=200>&emsp;&emsp;
			<img src="img\darkcho.jpg" width=200 height=200>&emsp;&emsp;
			<img src="img\brownies.jpg" width=200 height=200>&emsp;&emsp;
			<img src="img\doritex.jpg" width=200 height=200>&emsp;&emsp;
	    <br>
             Price = 50&emsp;Qty = 60&emsp;&emsp;&emsp;
			 Price = 90&emsp;Qty = 30&emsp;&emsp;&emsp;
			 Price = 60&emsp;Qty = 35&emsp;&emsp;&emsp;
			 Price = 20&emsp;Qty = 70
		<br><br>
&emsp;<input type="number" name="Oreo" value="0">&emsp;&emsp;&emsp;
<input type="number" name="Darkchoco" value="0">&emsp;&emsp;&emsp;
<input type="number" name="Brownie" value="0">&emsp;&emsp;&emsp;
<input type="number" name="Doritex" value="0">
<br> <br> <br> <br>

<input style="background-color:yellow; font-size:20px; width:180px; height:50px" type="submit" name="Buy" value="Buy">
<br> <br>
</form>
</center>
</body>
</html>