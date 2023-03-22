<?php

require __DIR__.'/../vendor/autoload.php';

class Solution {

    /**
     * @param string $s
     * @return int
     */
    function lengthOfLongestSubstring($s) {
        $strlen = strlen($s);

        if (isset($s[0])) {
            $substr = [0 => $s[0]];
            $count = 1;
        }
        else return 0;

        for ($i=1; $i < $strlen; $i++) {
            if (!in_array($s[$i], $substr)) {
                $substr[$i] = $s[$i];
            } else {
                $key = array_search($s[$i], $substr);
                $i = $key;
                $substr = [];
            }
            if ($count < count($substr)) $count = count($substr);
        }
        // dump($substr);
        return $count;
    }
}

$a = new Solution();
dump($a->lengthOfLongestSubstring("anviaj"));