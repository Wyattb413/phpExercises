<?php

$physicistsList = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

$physicistsArray = explode(', ', $physicistsList);
$poppedArray = $physicistsArray;



function humanizedList($physicistsArray, $doASorting = false) {
	if ($doASorting) {
		asort($physicistsArray);
	} else {
		$physicistsArray;
	}
	$endOfArray = array_pop($physicistsArray);
	$physicistsString = implode(', ', $physicistsArray);
	$physicistsString = $physicistsString . ", and " . $endOfArray;
	return $physicistsString;
}

print_r($physicistsArray);
echo "Some of the most famous fictional theoretical physicists are " . humanizedList($physicistsArray) . PHP_EOL;