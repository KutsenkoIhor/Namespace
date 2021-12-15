<?php

require 'vendor/autoload.php';


// use default array_map
$result = assert(array_map(fn($item) => $item * 2, [1,2,3]) === [2,4,6]);

// use custom array_map
$result2 = \App\My\Custom\Name\Space\array_map(function() {}, []);

// use default DateTime class
$result3 = new DateTime();

// use custom DateTime
$result4 = new \Quantox\Intership\Own\DateTime();

// use default DateTime class
$arr = [1,2,3];
$result5 = array_walk($arr, function () {});

// use custom DateTime
$result6 =  \Quantox\Intership\Own\Functions\array_walk();

// result of current script should be
/**
 * I AM CUSTOM array_map FUNCTION
 * I AM CUSTOM DATETIME CLASS
 * I AM CUSTOM array_walk FUNCTION
 */