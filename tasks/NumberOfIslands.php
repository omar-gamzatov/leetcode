<!DOCTYPE html>
<html lang="en">
<body style="background-color: black; color: white">
<?php

require __DIR__.'/../vendor/autoload.php';

class Solution {

    /**
     * @param string[][] $grid
     * @return int
     */
    function numIslands($grid) {
        $count = 0;
        $vertex = 0;
        // $i_arr = array_fill(0, count($grid), array());
        $j_arr = array_fill(0, count($grid), array());
        foreach ($grid as $i => $value_i) {
            foreach ($value_i as $j => $value_j) {
                if ($value_j == 1) {
                    $vertex++;
                    // array_push($i_arr[$i], $i);
                    array_push($j_arr[$i], $j);
                }
            }
        }
        // dump($i_arr);
        dump($j_arr);
        $flag = false;

        foreach ($j_arr as $key_1 => $value_1) {
            foreach ($value_1 as $key_2 => $value_2) {
                foreach ($j_arr as $key_3 => $value_3) {
                    if (in_array($value_2, $value_3) && $key_1 == $key_3) {
                        $flag = true;
                        unset($j_arr[$key_3]);
                    } else {
                        $flag = true;
                        unset($j_arr[$key_1]);
                    }
                }
                if ($flag) {
                    $count++;
                    $flag = false;
                    unset($j_arr[$key_1]);
                } 
            }
        }
        dump($count/2);
        dump($j_arr);
        // foreach ($i_arr as $key_1 => $value_1) {
        //     echo "$key_1: <br>";
        //         foreach ($value_1 as $key_2 => $value_2) {
        //             echo "$value_2, ";
        //         }
        //         echo "<br>";
        // }

        return 0;
    }
}
// $arr = [
//     ["1","1","0"],
//     ["1","0","1"],
//     ["0","0","1"]
// ];

$arr = [
    ["1","0","1","1","0"],
    ["1","0","0","1","0"],
    ["1","0","0","0","1"],
    ["0","0","1","1","0"],
    ["0","1","0","0","0"],
    ["1","1","0","0","1"], 
    ["0","0","1","1","0"], 
    ["1","1","0","0","1"], 
];


$a = new Solution();

dump($a->numIslands($arr));

?>

</body>
</html>