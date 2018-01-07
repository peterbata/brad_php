<?php

// Create connection

$conn = mysqli_connect('localhost', 'root', '', 'phpblog');
if(mysqli_connect_errno()){
	echo 'Failed to connect MySql '. mysqli_connect_errno();
}