<?php
function bubble_sort($arr)
{
    $arr_length = count($arr);
    for ($i = $arr_length - 1; $i > 0; $i--) {
        for ($j = 0; $j <= $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $tmp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $tmp;
            }
        }
    }
    return $arr;
}
$arr = array(77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9);
print_r(bubble_sort($arr));
