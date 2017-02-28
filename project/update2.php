<?php
	session_start();
?>

<html>
<head>
<script language="javascript"  type="text/javascript">
function erase()
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
<title>Student Update</title>
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
<button name="Update" onClick="phpfn()" >Update</button>
&nbsp;&nbsp;<button name="reset"  onClick="erase()"  >Reset</button>
</form>

<?php
	
	$upname=$_POST['name4'];
	$_session["new"]=$upname;
	
	$m=new mongoclient();
	$db=$m->project;
	$collection=$db->data;
	$cursor=$collection->find();
	$num=$cursor->count();

	
	if($num > 0)
	{
	      foreach ($cursor as $obj)
	        {
       		$jname=$obj["name"];         
		if($jname==$upname)
		{
			$name=$obj["name"];
			 $nick =$obj["nickname"] ;			
			  
		      }
			  
		}	
	}
		 if( isset($_POST['Update']) )
	{
		echo  "m inside".$_session["new"] ;	
		//	include("update4.php");

		

		//$localname= $_session["new"];
		//echo $localname;
		//echo "hello working";
		
		/*
		 $pnickname=$_POST["nickname"];
		$pmno=$_POST["mno"];
		$pemail=$_POST["email"];
		$paddress=$_POST['address'];
		$pzsign=$_POST['zsign'];
		$pdob=$_POST['dob'];	
		$pmovie=$_POST['movie'];
		$pactor=$_POST[actor];
		$pactress=$_POST[actress];	
		
		
		$select=$collection->find();
		foreach($select as $id)
		{
     			   $tempname = $id["name"];
			//echo $tempname;
			//echo $id["name"];
			
			if($upname==$id["name"])
			{
			echo "I am In"; 
			//$condition=array( "name" => "$tempname" );
			//$change=array(  '$set' => array ( "mno"=> "$pmno" ) );
			//$collection->update( $condition,$change );
    	
			//$collection->remove(array("name"=>$uname) );
				//$flag=1;
			}
				
    		}
	*/
	

	}

?>
 <script language="javascript">
		
	document.getElementById("t1").value= "<?php echo $name; ?>";
	document.getElementById("t2").value= "<?php echo $nick; ?>";	
	document.getElementById("t3").value="<?php echo $mobileno; ?>";
	document.getElementById("t4").value="<?php echo $mail; ?>";
	document.getElementById("t5").value="<?php echo $add; ?>";
	document.getElementById("t6").value="<?php echo $sign; ?>";
	document.getElementById("t7").value="<?php echo $birthdate; ?>";
	document.getElementById("t8").value="<?php echo $mov; ?>";
	document.getElementById("t9").value="<?php echo $male; ?>";
	document.getElementById("t10").value="<?php echo $female; ?>";
	
</script>

</body>
</html>