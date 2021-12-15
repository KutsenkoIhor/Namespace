<?php

require 'vendor/autoload.php';


// use default array_map
$result = assert(array_map(fn($item) => $item * 2, [1,2,3]) === [2,4,6]);

// use custom array_map
$result2 = \App\My\Custom\Name\Space\array_map(function() {}, []);

var_dump($result, $result2);

// use default DateTime class
$result3 = new DateTime();

// use custom DateTime
$result4 = new \Quantox\Intership\Own\DateTime();

