<?php
function intersection($arr_a, $arr_b)
{
    $res = array();
    $map = array();

    for ($i = 0; $i < sizeof($arr_a); $i++) {
        $map[$arr_a[$i]] = true;
    };

    for ($i = 0; $i < sizeof($arr_b); $i++) {
        if ($map[$arr_b[$i]]) {
            array_push($res, $arr_b[$i]);
            $map[$arr_b[$i]] = false;
        }
    };

    return $res;
}

function difference($arr_a, $arr_b)
{
    $map = array();
    $arr_a = array_values(array_unique($arr_a));

    for ($i = 0; $i < sizeof($arr_a); $i++) {
        $map[$arr_a[$i]] = true;
    };

    for ($i = 0; $i < sizeof($arr_b); $i++) {

        if ($map[$arr_b[$i]]) {
            $key = array_search($arr_b[$i], $arr_a);
            unset($arr_a[$key]);
            $map[$arr_b[$i]] = false;
        }
    };
    return $arr_a;
}

function union($arr_a, $arr_b)
{
    $arr_a = array_values(array_unique($arr_a));
    $arr_b = array_values(array_unique($arr_b));

    foreach ($arr_b as $val) {
        if (!array_search($val, $arr_a)) {
            array_push($arr_a, $val);
        }
    }
    return $arr_a;
}


$arr_a = array(77, 5, 5, 22, 13, 55, 97, 4, 796, 1, 0, 9);
$arr_b = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);

$arr_c = intersection($arr_a, $arr_b);
$arr_d = difference($arr_a, $arr_b);
$arr_e = union($arr_a, $arr_b);
