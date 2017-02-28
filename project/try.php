<html>
<style>
		body	{
		background-image:url("http://localhost/project/update.jpg") ;
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

<body>
<h2>&nbsp;&nbsp;&nbsp;Student Detail</h2>
<?php include("menu.html");   ?>
&nbsp;&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;&nbsp;&nbsp;Update Details 
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
</form>

		

<?php
	
	

	$pname=$_POST['name'];
	$pnickname=$_POST['nickname'];
	
	if(isset($_POST['sub']) )
	{
	
	//$pname=$_POST["name4"];
	//working fine
	//$pno=$_POST["roll"];
	
	$m=new mongoclient();
	$db=$m->project;
	$collection=$db->data;
	$cursor=$collection->find();
	$num=$cursor->count();
	
	if($num > 0)
		
		{
		    	 
				
			       foreach ($cursor as $obj)
			        {
					if( $obj["name"]==$pname )
					{
					//echo $pname;
					//echo $pno;
					 $collection->remove(array("name"=>"$pname"));
					$doc=array("name"=>"$pname","nickname"=>"$pnickname");
					$collection->insert($doc);
					echo "Added to Book";
	
						
					}
  			      }

	}
}
?>

</body>
</html>