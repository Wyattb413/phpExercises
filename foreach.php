<?php

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

// foreach ($things as $thing) {
// 	echo gettype($thing) . PHP_EOL;
// }
// foreach ($things as $thing) {
// 	echo is_scalar($thing) . PHP_EOL;
// }
foreach ($things as $thing) {
	if (gettype($thing) == 'array') {
		// print_r($thing);
		echo "array: ";
		foreach ($thing as $stuff) {
			echo $stuff . ", ";
		}
		echo PHP_EOL;
	} else {
		echo gettype($thing) . " " . ( $thing) . " Is Scalar: " . is_scalar($thing) . PHP_EOL;
	}
}
