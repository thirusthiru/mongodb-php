
<?php
	session_start();
	
?>
<html>
<body>
<?php
	$demo=$_session["new"];
	echo $demo;
	
	$m=new mongoclient();
	$db=$m->project;
	$collection=$db->data;
	$cursor=$collection->find();
	$num=$cursor->count();
	

	session_destroy();
?>
</body>
</html>