<?php
	if(isset($_GET['name'])){
		//echo $_GET['name'];
		//print_r($_GET);
		$name = htmlentities($_GET['name']);
		//echo $name;
	}
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>My Website</title>
</head>
<body>
	<form method="GET" action="get_post.php">
		<div>
			<label>Name</label><br>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label><br>
			<input type="text" name="email">
		</div>
			<input type="submit" name="submit">
	</form>
	<ul>
		<li>
			<a href="get_post.php?name=Peter">Peter</a>
		</li>
		<li>
			<a href="get_post.php?name=Renata">Renata</a>
		</li>
	</ul>
	<h1><?php echo "{$name}'s Profile";?></h1>
</body>
</html>