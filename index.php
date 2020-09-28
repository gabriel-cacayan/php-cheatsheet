<?php

	$arr = [1,2,3,4,5,6,7,8,9,10];


	function removeEven($var) {
		return $var & 1;
	}

	function removeOdd($var) {
		return !($var & 1);
	}

	function sum($carry, $item) {
	    $carry += $item;
	    return $carry;
	}

	function squre($var){
		return $var * $var;
	}

	// filtering elements
	print_r(array_filter($arr, "removeEven")); // Array ( [0] => 1 [2] => 3 [4] => 5 [6] => 7 [8] => 9 )
	echo "<br>";
	print_r(array_filter($arr, "removeOdd"));  // Array ( [1] => 2 [3] => 4 [5] => 6 [7] => 8 [9] => 10 )
	echo "<br>";

	// modifying array elements
	print_r(array_map("squre", $arr)); // Array ( [0] => 1 [1] => 4 [2] => 9 [3] => 16 [4] => 25 [5] => 36 [6] => 49 [7] => 64 [8] => 81 [9] => 100 )
	echo "<br>";

	// reduce
	var_dump(array_reduce($arr, "sum")); // int(55)
	echo "<br>";

	// Reversing an array
	print_r(array_reverse($arr)); // Array ( [0] => 10 [1] => 9 [2] => 8 [3] => 7 [4] => 6 [5] => 5 [6] => 4 [7] => 3 [8] => 2 [9] => 1 )
	echo "<br>";

	// Adding element to the end of array
	array_push($arr, 11); 
	print_r($arr); 
	echo "<br>";

	// Removing element to the end of array
	array_pop($arr);
	print_r($arr);
	echo "<br>";

	// Adding element to the start of array
	array_unshift($arr, 0);
	print_r($arr);
	echo "<br>";

	// Removing element to the start of array
	array_shift($arr);
	print_r($arr); 
	echo "<br>";

	// Count of element in the array
	var_dump(count($arr)); // int(10)