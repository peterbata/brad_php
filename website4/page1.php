<?php
	if(isset($_POST['submit'])){
		session_start(); // Start the session

		$_SESSION['name'] = htmlentities($_POST['name']);
		$_SESSION['email'] = htmlentities($_POST['email']);

		header('Location: page2.php');

	}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Document</title>
</head>
<body>
	<form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<input type="text" name="name" placeholder = "Enter Name">
	<br>
	<input type="text" name="email" placeholder = "Enter Email">
	<br>
	<input type="submit" name="submit" value = "Submit">
</body>
</html>