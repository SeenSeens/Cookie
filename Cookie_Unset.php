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

	// Unset cookie
	$ExpireTime_Unset = time() - 86400;
	//setcookie("Name", "Jazeb", "$ExpireTime_Unset");
	//setcookie("Name", null);
	//setcookie("Name", $ExpireTime_Unset);


	if (isset($_COOKIE['Name'])) {
		echo 'Cookie is set with the Name of ' . $_COOKIE['Name'];
	} else {
		echo 'Cookie is not set';
	}
	?>
</body>
</html>