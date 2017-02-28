<html >
<head>
<style>
		body	
		{
		background-image:url("http://localhost/project/search2.jpg") ;
		background-size:100% 100%;
		color: black;
		font-family: Monotype corsiva;
		font-size: 50px;

		}
		table
		{
			font-size:20px;
			letter-spacing:2px;
			font-weight:bold;
		}
		.many
		{
			-webkit-column-count:2;
			-webkit-column-gap:5px;	
			-webkit-column-width: 200px; 
			
		}
		
</style>
<title>Search</title>
</head>
<body>
Search Result:
<br><br>
<?php
	$pname=$_POST['name1'];
	$pnickname=$_POST['nickname2'];
	
	if( isset($_POST['find1']) || isset($_POST['find2']) )
	{
		
		$m=new mongoclient();
		$db=$m->project;
		$collection=$db->data;
		$cursor=$collection->find();
		$num=$cursor->count();
		if($num > 0)
		
		{
		    	 
				echo"<div class='many'>";
			       foreach ($cursor as $obj)
			        {
					if( ($obj["name"]==$pname) || ($obj["nickname"]==$pnickname ) )
					{
 					echo "<table cellspacing='11'>" ;      				
	
				echo "<tr><td>";         echo "Name:" ;	echo "</td><td>";
							echo $obj["name"];      echo "</td></tr>";   
					
				echo "<tr><td>";	     echo "  Nickname: " ;	echo "</td><td>";
					   	  echo $obj["nickname"] ; 	echo "</td></tr>";

				}
  			      }
			 echo"</div>";
		}
		
		
		else
		{
			echo "<br>Verify Name <br>Contact Doesn't Exists";
		}		 
	
	}

?>
<form action="<?php  $_SERVER['PHP_SELF'];  ?>"   method="post">
	&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
	
	<center><button name="back" >Go Back</button></center>
</form>
<?php
	if(isset( $_POST['back']) )
	{
		header("Location:http://localhost/project/search.php");
	}		
?>


</body>
</html>