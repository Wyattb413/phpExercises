<?php

function throwErrorMessage() 
{
	return 'ERROR: Parameters Must Be Numeric';
}

function add($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
	    return $a + $b;
	} else {
		echo throwErrorMessage();
	}
}

function subtract($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    return $a - $b;
	} else {
		echo throwErrorMessage();
	}
}

function multiply($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
    return $a * $b;
	} else {
		echo throwErrorMessage();
	}
}

function divide($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		if ($b != 0) {
		    return $a / $b;
	    } else {
	    	return "You tried to divide by {$b}, and you cannot do that, please reconsider...";
		}
	} else {
		echo throwErrorMessage();
	}
}
function modulus($a, $b)
{
	if (is_numeric($a) && is_numeric($b)) {
		if ($b != 0) {
			return $a % $b;
		} else {
			return "You tried to divide by {$b}, and you cannot do that, please reconsider...";
		}
	} else {
		echo throwErrorMessage();
	}
}


$paramA = 1;
$paramB = 5;

echo add($paramA, $paramB) . PHP_EOL;
echo subtract($paramA, $paramB) . PHP_EOL;
echo multiply($paramA, $paramB) . PHP_EOL;
echo divide($paramA, $paramB) . PHP_EOL;
echo modulus($paramA, $paramB) . PHP_EOL;
