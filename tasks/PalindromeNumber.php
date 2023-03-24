<?php

require __DIR__ . '\..\vendor\autoload.php';

class Solution {

    /**
     * @param int $x
     * @return bool
     */
    function isPalindrome($x) {
        
        for ($i = 0; $i < strlen((string)$x); $i++) { 
            if (((string)$x)[$i] == ((string)$x)[strlen((string)$x) - $i - 1]) {
                $flag = true;
            } else return false;
        }
        return true;
    }
}

// $a = new Solution();

// dump($a->isPalindrome(10011));

$a = 100;
$a /= 10;

dump('$\710192\clickURL');