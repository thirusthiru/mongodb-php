<html >
<head>
<style>
		body
		{
		background-image:url("http://localhost/project/d.jpg") ;
		background-size:100% 100%;
		color: black;
		font-family: Monotype corsiva;
		font-size: 30px;

		}
		h2
		{	
				
			font-size: 70px;
			letter-spacing:4px;
		}
		 p
		{ 
		font-size:30px;
		letter-spacing:4px;
		font-weight:bold;

		}
		
</style>

<title>Student Delete</title>
</head>
<body>
<h2>&nbsp;&nbsp;&nbsp;Student Details</h2>
<?php include("menu.html");?> <br>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Delete Contact</p><br>
<form action="http://localhost/project/delete2.php" method="post">
&nbsp;&nbsp;&nbsp;&nbsp;Enter Name : <input type="text" name= "name3">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

<button name="find3" >Click Here</button><br><br>
</form>
</body>
</html>
