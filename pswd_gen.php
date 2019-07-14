<!DOCTYPE html>
<html>
<head>
	<title>Generated Password</title>
</head>

<style>
	
body {
  background-color: #fff;
  margin: 0 15%;
  font-family: arial;
  text-align: center;
  }

</style>
<body>

<?php

// get form the user

$n = $_GET['Password'];

// Work out generator 

function password_generate($chars) 
{
  $data = '1234567890ABCDEFGHIJKLMNOPQRSTUVWXYZabcefghijklmnopqrstuvwxyz';
  return substr(str_shuffle($data), 0, $chars);
}
  print password_generate($n)."\n";
?>



</body>
</html>