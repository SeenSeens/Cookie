<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Setting Cookie</title>
	<link rel="stylesheet" href="">
</head>
<body>
	<?php
	$ExpireTime = time() + 86400;
	setcookie("Name", "Jazeb", $ExpireTime);
	setcookie("Age", "24", $ExpireTime);
	//print_r($_COOKIE);
	echo $_COOKIE["Name"]."<br>";
	echo 'my name is : ' .$_COOKIE["Name"]. ' and my age is : '. $_COOKIE['Age'];

	?>
</body>
</html>