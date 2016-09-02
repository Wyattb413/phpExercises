<?php 

	$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
	$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'Fer', 'Maria'];

	// print_r($names);
	// print_r($compare);

	function combineArrays($array, $array2){
		$resArray = [];

		// Get the larger array and the shorter
		if(count($array) >= count($array2)){
			$largerArray = $array;
			$shortArray = $array2;
		}else{
			$largerArray = $array2;
			$shortArray = $array;
		}

		// foreach the larger and check if there is a val in the second one
		foreach ($largerArray as $key => $val) {
			if(in_array($val, $shortArray)){
				array_push($resArray, $val);
			}else{
				array_push($resArray, $val);
				if(isset($shortArray[$key])){
					array_push($resArray, $shortArray[$key]);
				}
			}
		}

		return $resArray;
	}

	print_r(combineArrays($names, $compare));