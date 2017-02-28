<html >
<head>
<script language="javascript">
function erase();
{
	document.getElementById("t1").value="";
	document.getElementById("t2").value="";
}
</script>
<style>
body
	{
		background-image:url("http://localhost/project/admin.jpg") ;
		background-size:100% 100%;
		color: black;
		font-family: Monotype corsiva;
		font-size: 30px;
		
	}
</style>
<title>Friend Login</title>
</head>
<body><br>
<center><h1> Welcome to My Friends Book</h1>

<form action= "<?php echo $_SERVER['PHP_SELF'] ; ?>"method="post">
<br><h2>Admin Login :</h2>
Username : <input type="text" name= "username" id="t1">
<br><br>
Password : <input type="password" name= "pwd" id="t2">
<br><br><button name="signin" >Login</button>
&nbsp;&nbsp;<button name="reset"  onClick="erase()"  >Reset</button>
</form>
</center>
<?php
		$pusername=$_POST['username'];
		$pass=$_POST['pwd'];
	
	if( isset($_POST['signin'])  )
	{
		
		if($pusername=="admin" && $pass=="root")
		{
			header("Location: http://localhost/project/search.php ");
		}
		else
		{
					echo "<br><center>Incorrect Username or Password</center>";
		}		 
	}
		
?>
</body>
</html>












