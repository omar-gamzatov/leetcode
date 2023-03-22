<?php

require __DIR__.'/../vendor/autoload.php';

class Solution {

    /**
     * @param int[] $nums
     * @param int $target
     * @return int[]
     */
    function twoSum($nums, $target) {
        foreach ($nums as $key => $value) {
            $pair_key = array_search($target - $value, $nums);
            if (is_int($pair_key) && $pair_key != $key) {
                return [$key, $pair_key];
            } 
        }
        return [0, 0];
    }
}

$a = new Solution();
dump($a->twoSum(array(-3,4,3,90), 0));