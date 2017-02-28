<html >
<head>
<style>
		body	
		{
		background: linear-gradient(to right, rgba(255,255,128,1), rgba(255,255,128,1));
		font-family: Monotype corsiva;
		font-size: 30px;
		color:black;

		}
		table
		{
			font-size:30px;
			letter-spacing:1px;
		}
		h2
		{	
				
			font-size: 70px;
			letter-spacing:4px;
			color:black;
		}
		

		
</style>
<title>View</title>
</head>
<body>
<a id="top" ></a>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Student Details</h2>
<?php include("menu.html"); ?>

<center>

<?php
		$m=new mongoclient();
		$db=$m->project;
		$collection=$db->data;
		$cursor=$collection->find();
		$num=$cursor->count();
		
		
		if($num > 0)
		
		{
		    	
			
			       foreach ($cursor as $obj)
			        {
					
       					echo "<table cellspacing='2'><tr><td>";         echo "Name:" ;	echo "</td><td>";
							echo $obj["name"];      echo "</td></tr>";   
					
				echo "<tr><td>";	     echo "  Nickname: " ;	echo "</td><td>";
					   	  echo $obj["nickname"] ; 	echo "</td></tr>";
 echo "</td></tr></table><hr width='600px'>";
				
  			      }
			   
		}
		
?>
<form action="<?php  $_SERVER['PHP_SELF'];  ?>"   method="post">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<button name="top" ><a href="#top">Top</a></button>
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	<button name="back" >Search</button>
	
</form>
</center>
<?php
	if(isset( $_POST['back']) )
	{
		header("Location:http://localhost/search.php");
	}
				
?>

</body>
</html>