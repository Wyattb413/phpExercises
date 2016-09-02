<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

// $query = 'Tina';

// $result = array_search($query, $names);

// if(gettype($result) != 'Boolean') {
// 	echo "We found {$query} at the array index of {$result}" . PHP_EOL;
// } else {
// 	echo "Search was not found :c" . PHP_EOL;
// }

function caseInsensitiveSearch($array, $searchTerm) {
	foreach ($array as $index => $value) {
		if(strtolower($searchTerm) == strtolower($value)) {
			return $index;
		}
	}
	return false;
}

var_dump(caseInsensitiveSearch($names, 'tina'));

function arrayContains($haystack, $needle) {
	$result = array_search($needle, $haystack);
	return $result !== false;
}

// function compareArrays($search, $array) {
// 		$result = array_search($search, $array);
// 		if(gettype($result) != 'boolean') {
// 			echo "We found {$search} at the array index of {$result}" . PHP_EOL;
// 		} else {
// 			echo "Search was not found :c" . PHP_EOL;
// 		}
// }

// compareArrays('Tina', $compare);

// $numberOfResultsMatched = 0;

// for ($i= 0; $i < count($names); $i++) { 
// 	$query = $names[$i];
// 	$result = array_search($query, $compare);
// 	if(gettype($result) != 'boolean') {
// 		$numberOfResultsMatched += 1;
// 		echo "We found {$query} at the array index of {$i}" . PHP_EOL;
// 	} else {
// 		echo "Search was not found :c" . PHP_EOL;
// 	}
// }

// echo "Number of Matched results was: " . $numberOfResultsMatched . PHP_EOL;

function compareArrays($array1, $array2) {
	$count = 0;

	foreach ($array1 as $value) {
		if(arrayContains($array2, $value)) {
			$count += 1;
		}
	}

	return $count;
}

var_dump(compareArrays($names, $compare));