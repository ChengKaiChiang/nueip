<?php
class Solution
{
    function twoSum($nums, $target)
    {
        $arr = array();
        foreach ($nums as $key => $num) {
            $arr[$num] = $key;
        }

        foreach ($nums as $key => $val) {
            $diff = $target - $val;
            if (isset($arr[$diff]) && $key != $arr[$diff]) {
                return array($key, $arr[$diff]);
            }
        }
        return array(0, 0);
    }
}

$nums = array(2, 7, 11, 15);
$target = 9;
$sol = new Solution();
$result = $sol->twoSum($nums, $target);
print_r($result);