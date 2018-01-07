<?php
	require('config/db.php');

	// Create query
	
	$query = 'SELECT * FROM posts';

	// Get results

	$result = mysqli_query($conn, $query);

	// Fetch data

	$posts = mysqli_fetch_all($result, MYSQLI_ASSOC);
	// var_dump($posts);

	// Free restore_include_path
	mysqli_free_result($result);

	// Close connection

	mysqli_close($conn);
	?>

<!DOCTYPE html>
	<html lang="en">
		<head>
			<title>PHP Blog</title>
			<link rel="stylesheet" href="https://bootswatch.com/3/cerulean/bootstrap.min.css">
		</head>
	<body>
		<div class="container">
		<h1>Posts</h1>
		<?php foreach($posts as $post) : ?>
			<div class="well">
			<h3><?php echo $post['title']; ?></h3>
			<small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
			<p><?php echo $post['body']; ?></p>
			</div>
		<?php endforeach; ?>
		</div>
	</body>
</html>