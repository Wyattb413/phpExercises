<?php

// Output should include:
// - total number of employees
// - total number of units sold
// - avg units sold per employee
// - Then output should share employee production, ordered from highest to lowest # of units
// * Units   |     Full Name       |   Employee Number
// * 5             Bob Boberson        2

function parseEmployees($filename) {
	$employees = [];
	$requiredEmployeeInfo = [];


	$handle = fopen($filename, "r");
	$fileContent = fread($handle, filesize($filename));
	fclose($handle);
	$employees = explode("\n", $fileContent);
	array_splice($employees, 0, 6);
	foreach ($employees as $employee => $value) {
		// var_dump($value);
		$employeesArray = explode(", ", $value);
		$someArray = [];
		$someArray['EmployeeNumber'] = $employeesArray[0];
		$someArray['EmployeeFirstName'] = $employeesArray[1];
		$someArray['EmployeeLastName'] = $employeesArray[2];
		$someArray['SalesUnits'] = $employeesArray[3];
		$employeesArrayWithKeys[] = $someArray;
	}
	return $employeesArrayWithKeys;
}

$employeeAssociatedArray = parseEmployees("readingFilesExercise2.txt");
var_dump($employeeAssociatedArray);

printf("Units   |     Full Name       |   Employee Number" . PHP_EOL);
for ($i=0; $i < sizeof($employeeAssociatedArray); $i++) { 
	$salesUnits .= ($employeeAssociatedArray[$i]['SalesUnits'] . PHP_EOL);
	$salesUnitsArray = explode("\n", $salesUnits);
	arsort($salesUnitsArray);
}
	print_r($salesUnitsArray);
// print_r($employeeAssociatedArray[0]['EmployeeNumber'] . PHP_EOL);