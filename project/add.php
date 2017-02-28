<html >
<head>
<script language="javascript">
function erase();
{
	document.getElementById("t1").value="";
	document.getElementById("t2").value="";
	document.getElementById("t3").value="";
	document.getElementById("t4").value="";
	document.getElementById("t5").value="";
	document.getElementById("t6").value="";
	document.getElementById("t7").value="";
	document.getElementById("t8").value="";
	document.getElementById("t9").value="";
	document.getElementById("t10").value="";	
}



</script>

<style>
		body	{
		background-image:url("http://localhost/project/admin.jpg") ;
		background-size:100% 100%;
		color: black;
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
		text-color:black;
		letter-spacing:3px;
		
		}
		
</style>

<title>Student Add</title>
</head>
<body>
<h2>&nbsp;&nbsp;&nbsp;Student Details</h2>
<?php include("menu.html"); ?>
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Fill Details
<form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<table cellspacing="20" >

<tr><td>Name:</td><td><input type="text" name="name" id="t1" placeholder="First_Name Last_Name " autofocus></td>
<td> Nick Name:</td><td><input type="text" name="nickname" id="t2" placeholder="eg. John " autofocus></td></tr>

</table>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
<input type ="submit" name="sub"  >
&nbsp;&nbsp;<button name="reset"  onClick="erase()"  >Reset</button>
</form>
<?php
	$pname=$_POST['name'];
	$pnickname=$_POST['nickname'];
	



	

if(isset($_POST['sub']) )
	{		
		$m=new mongoclient();
		$db=$m->project;
		$collection=$db->data;
		$doc=array("name"=>"$pname","nickname"=>"$pnickname");

	
	if( isset($_POST['name']))
	{
		$cursor=$collection->find();
		$num=$cursor->count();
		if($num > 0)
		
		{
		    	 
				
			      	 foreach ($cursor as $obj)
			       	 {
					if( ($obj["name"]==$pname))
					{
 					   
					echo "<script language='javascript'> alert('username alreasy exists..!!')</script>";
   					location.reload(); 
					}
					else  if (empty($_POST["name"])) 
{
echo "<script language='javascript'> alert('username cannot be empty!!')</script>";
location.reload(); 
}

else if (!preg_match("/^[a-zA-Z ]*$/",$pname))
	{
	echo "<script language='javascript'> alert('only letters allowed!!')</script>";
	location.reload(); 
	}

else if(empty($_POST["nickname"]))
	{
    	echo "<script language='javascript'> alert('nickname cannot be empty!!')</script>";
	location.reload(); 
	} 

   	  }
			 
		}
}
		
		$collection->insert($doc);
		echo "Added to Book";
	}






?>
</body>
</html>