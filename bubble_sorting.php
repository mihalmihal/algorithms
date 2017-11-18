<?php
$array = array_slice($argv, 1);
if (empty($array)) {
    die("arguments should be valid array");
}

$length = count($array);

do {
	$swaps_count = 0;
	for($i = 0; $i < $length -1; $i++) {
		$first = $array[$i];
		$second = $array[$i + 1];

		if ($second < $first) {
			$array[$i] =  $second;
			$array[$i + 1] = $first;
			$swaps_count++;
		}
	}
}  while($swaps_count > 0);

print_r($array);