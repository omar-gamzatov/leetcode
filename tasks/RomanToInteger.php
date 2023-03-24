<?php

require __DIR__ . '\..\vendor\autoload.php';

class Solution {

    /**
     * @param string $s
     * @return int
     */
    function romanToInt($s) {
        $sum = 0;
        for ($i = strlen($s) - 1; $i >= 0; $i--) {
            switch ($s[$i]) {
                case 'I':
                    if (isset($s[$i+1]) && ($s[$i+1] == 'V' || $s[$i+1] == 'X')) $sum -= 1;
                    else $sum += 1;
                    break;
                case 'V':
                    // if ($s[$i-1] == 'I') $sum += 4;
                    $sum += 5;
                    break;
                case 'X':
                    if (isset($s[$i+1]) && ($s[$i+1] == 'L' || $s[$i+1] == 'C')) $sum -= 10;
                    // if ($s[$i-1] == 'I') $sum += 9;
                    else $sum += 10;
                    break;
                case 'L':
                    // if ($s[$i-1] == 'X') $sum += 40;
                    $sum += 50;
                    break;
                case 'C':
                    if (isset($s[$i+1]) && ($s[$i+1] == 'D' || $s[$i+1] == 'M')) $sum -= 100;
                    // if ($s[$i-1] == 'X') $sum += 90;
                    else $sum += 100;
                    break;
                case 'D':
                    // if ($s[$i-1] == 'C') $sum += 400;
                    $sum += 500;
                    break;
                case 'M':
                    // if ($s[$i-1] == 'C') $sum += 900;
                    $sum += 1000;
                    break;
                
                default:
                    break;
            }
        }
        return $sum;
    }
}

$a = new Solution();

dump($a->romanToInt("MMMCDXC"));