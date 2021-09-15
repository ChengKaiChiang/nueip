<?php

$arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
$odd = 0;
$even = 0;
$odd_arr = array();
$even_arr = array();

for ($i = 0; $i < count($arr); $i++) {
    if ($arr[$i] % 2 == 0) {
        $even += $arr[$i];
        array_push($even_arr, $arr[$i]);
    } else {
        $odd += $arr[$i];
        array_push($odd_arr, $arr[$i]);
    }
}

echo "Q3-1 result: " . ($odd - $even). "\n";
echo "Q3-2 result: \n";
print_r($odd_arr);
print_r($even_arr);