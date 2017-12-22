<?php

	# CONDITIONALS

	/*
		==
		===
		<
		>
		<=
		>=
		!=
		!==
	*/

	$num = 6;
	if($num > 4 XOR $num <10){
		echo "$num passed";
	}

	# SWITCH

	$favcolor = 'yellow';

	switch($favcolor){
		case 'red':
			echo 'Your favorite color is red';
		break;
	
		case 'blue':
			echo 'Your favorite color is blue';
		break;
		
		case 'green':
			echo 'Your favorite color is green';
		break;
		
		default:
			echo 'Your favorite color is something else';
}

?>