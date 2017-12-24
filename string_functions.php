<?php

# substr()
# Returns a portion of a string

	// $output = substr('Hello', -3);
	// echo $output;

	// $output = strlen('Hello');
	// echo $output;

	//  $output = strpos('Hello', 'o');
	//  echo $output;

	// $text = trim('Hello world          ');
	// var_dump($text);

	$values = array(true, false, null, 'abc', 33, '33', 22.4, '', ' ', 0, '0');

	foreach($values as $value){
		if(is_string($value)){
			echo "{$value} is a string<br>";
		}
	}




?>