<?php

// TODO: Create your inspect() function here
function inspect($variable) {
	$type = gettype($variable);
	if ($type == "NULL") {
		return "The value is NULL";
	}
	if ($type == "boolean") {
		if ($variable == 1) {
			return "The Boolean is TRUE";
		} else {
			return "The Boolean is FALSE";
		}
	}
	if ($type == "string") {
		if (strlen($variable) == 0) {
			return "The String is EMPTY";
		}
	}
	if ($type == "array") {
		if (sizeof($variable) == 0) {
			return "The are no contents in this " . $type;
		}
		return "The contents of the " . $type . " is: " . implode(", ", $variable);
	} 
	return "The " . $type . " is " . $variable;
}
// Do not mofify these variables!
$string1 = "I'm a little teapot";
$string2 = '';
$array1 = [];
$array2 = [1, 2, 3];
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value

echo 'Inspecting $num1: ';
$variable = $num1;
echo inspect($variable) . PHP_EOL;

echo 'Inspecting $num2: ';
$variable = $num2;
echo inspect($variable) . PHP_EOL;

echo 'Inspecting $num3: ';
$variable = $num3;
echo inspect($variable) . PHP_EOL;

echo 'Inspecting $num4: ';
$variable = $num4;
echo inspect($variable) . PHP_EOL;

echo 'Inspecting $null: ';
$variable = $null;
echo inspect($variable) . PHP_EOL;

echo 'Inspecting $bool1: ';
$variable = $bool1;
echo inspect($variable) . PHP_EOL;

echo 'Inspecting $bool2: ';
$variable = $bool2;
echo inspect($variable) . PHP_EOL;

echo 'Inspecting $string1: ';
$variable = $string1;
echo inspect($variable) . PHP_EOL;

echo 'Inspecting $string2: ';
$variable = $string2;
echo inspect($variable) . PHP_EOL;

echo 'Inspecting $array1: ';
$variable = $array1;
echo inspect($variable) . PHP_EOL;

echo 'Inspecting $array2: ';
$variable = $array2;
echo inspect($variable) . PHP_EOL;
