<?php

$array = array_slice($argv, 1);
if (empty($array)) {
    die("arguments should be valid array");
}

function insertion_sort($array)
{
    $length = count($array);
    for($i = 1; $i < $length; $i++) {
        $current = $array[$i];
        $previous_position = $i - 1;//1
        while($previous_position >= 0 && $array[$previous_position] > $current ) {
            $array[$previous_position + 1] = $array[$previous_position];
            $array[$previous_position] = $current;
            --$previous_position;
        }
    }
    return $array;
}

$array_sorted = insertion_sort($array);
print_r($array_sorted);