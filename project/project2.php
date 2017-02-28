
<html >
<head>
<style>
		body		{
		background-image:url("http://localhost/project/abstract4.jpg") ;
		background-size:100% 100%;
		color: white;
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

<title>Search</title>
</head>
<body>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</h2>
<form action="<?php  echo $_SERVER['PHP_SELF']; ?>" method="post">
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Search Book</p><br>
&nbsp;&nbsp;&nbsp;&nbsp;Enter Name : <input type="text" name= "name2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="find1" >Search Record</button><br><br>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;OR<br><br>
&nbsp;&nbsp;&nbsp;&nbsp;Nick Name : <input type="text" name= "nickname2">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button name="find2" >Search Record</button>

<?php
	$pname=$_POST['name'];
	$pnickname=$_POST['nickname'];
	
	if( isset($_POST['find1']) || isset($_POST['find2']) )
	{
		
		$m=new mongoclient();
		$a=$m->project->data;
		$b=array ("name"=>"$pname");
		$a->find($b);
		foreach($a as $temp)
		{
				echo $temp['name'];
				echo "<br><br><br>";
				echo $temp['mno'];
				echo "M inside for each";
		}
		
	}

?>

</body>
</html>












