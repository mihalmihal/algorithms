<?php
function binary_search(array $haystack, int $needle, int $start, int $end) : int
{
	if ($start - $end == 0 && $haystack[$start] != $needle)  {
		return -1;
	}
	$middle = floor(($end + $start)/2);
	if ($haystack[$middle] == $needle) {
		return $middle;
	}
	if($haystack[$middle] > $needle) {
		echo $middle . 'ddd' . PHP_EOL;
		return binary_search($haystack, $needle, 0, $middle - 1);
	} else {
		echo $middle . 'qqq' . PHP_EOL;
		return binary_search($haystack, $needle, $middle + 1, count($haystack) - 1);
	}
}

$array = [1,2,3,6,7,9,11];
echo binary_search($array, 4, 0, count($array) -1);