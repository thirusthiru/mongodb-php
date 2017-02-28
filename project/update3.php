<html>

<head>
<style>
		body	{
		background-image:url("http://localhost/project/update.jpg") ;
		background-size:100% 100%;
		color: white;
		font-family: Monotype corsiva;
		font-size: 30px;
		font-weight:bold;
		letter-spacing:4px;
		}
		h2
		{	
				
			font-size: 70px;
			letter-spacing:4px;
		}
		 table
		{ 
		font-size:30px;
		text-color:green;
		letter-spacing:3px;
		
		}
		
</style>
</head>
<body>
<h2>&nbsp;&nbsp;&nbsp;</h2>
 <?php	 include("menu.html");	 ?>
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;
<form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<table cellspacing="20" >

<tr><td>Name:</td><td><input type="text" name="name" id="t1"></td>
<td> Nick Name:</td><td><input type="text" name="nickname" id="t2"></td></tr>

</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type ="submit" name="sub"  >
&nbsp;&nbsp;<button name="reset"  onClick="erase()"  >Reset</button>
</form>

</body>
</html>