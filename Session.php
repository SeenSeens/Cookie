<?php session_start(); ?>
<?php
$_SESSION['Name'] = "Jazeb Akram";
$Name = $_SESSION['Name'];
echo $Name;

echo '<br>';

$_SESSION['Age'] = '24';
$Age = $_SESSION['Age'];
echo $Age;
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Session</title>
	<link rel="stylesheet" href="">
</head>
<body>
	
</body>
</html>