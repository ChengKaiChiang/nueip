<?php
function merge_sort($data)
{
    if (count($data) < 2) {
        return $data;
    }

    $half = count($data) / 2;
    $arr_left = array_slice($data, 0, $half);
    $arr_right = array_slice($data, $half);

    return merge_data(merge_sort($arr_left), merge_sort($arr_right));
}

function merge_data($left, $right)
{
    $result = array();
    while (count($left) && count($right)) {
        if ($left[0] <= $right[0]) {
            array_push($result, array_shift($left));
        } else {
            array_push($result, array_shift($right));
        }
    }

    while (count($left)) array_push($result, array_shift($left));
    while (count($right)) array_push($result, array_shift($right));

    return $result;
}

$arr = array(77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9);
print_r(merge_sort($arr));
