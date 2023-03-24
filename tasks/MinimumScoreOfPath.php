<?php

require __DIR__.'/../vendor/autoload.php';

class Solution {

    /**
     * @param int $n
     * @param int[][] $roads
     * @return int
     */
    function minScore($n, $roads) {
        $shackled = [];
        $minScore = $roads[0][2];
        $viewedIndeces = [];
        $lastIndex = 0;
        for ($i = 1; $i <= $n; $i++) { 
            if (in_array($i, $viewedIndeces)) return $minScore;
            echo $i;

            array_push($viewedIndeces, $i);
            foreach ($roads as $key => $value) {
                if ($i == $value[0]) {
                    array_push($shackled, $value);
                    if ($value[2] < $minScore) {
                        $minScore = $value[2];
                    }
                }
                elseif ($i == $value[1]) {
                    array_push($shackled, $value);
                    if ($value[2] < $minScore) {
                        $minScore = $value[2];
                    }
                }
            }
            $minIndexScore = 20000000;
            foreach ($shackled as $key => $value) {
                if ($i == $value[1] && $value[2] <= $minIndexScore && !in_array($value[0], $viewedIndeces)) {
                    $minIndexScore = $value[2];
                    $minIndex = $value[0];
                } elseif ($i == $value[0] && $value[2] <= $minIndexScore && !in_array($value[1], $viewedIndeces)) {
                    $minIndexScore = $value[2];
                    $minIndex = $value[1];
                }
            }
            echo "<br>minIndex: " . $minIndex . "<br>";
            $lastIndex = $i;
            $i = $minIndex - 1;
            dump($shackled);
            dump($minScore);
            $shackled = [];
        }
        return $minScore;
    }
}

$a = new Solution();
$arr = array([37,77,7994],[77,79,2857],[79,28,1678],[16,21,7223],[44,2,1872],[15,26,383],[54,15,9033],[38,79,9479],[27,69,6813],[60,10,5810],[17,20,9118],[38,72,8826],[7,64,249],[2,65,4937],[79,44,6593],[26,78,3208],[3,18,5008],[33,54,3534],[79,65,3363],[64,34,1483],[52,79,6717],[75,16,5245],[72,7,5468],[67,3,2706],[52,33,4443],[61,75,3034],[24,6,6406],[26,79,9039],[18,61,1265],[62,52,2962],[79,15,2084],[6,17,5652],[10,44,393],[79,61,8296],[20,37,7689],[79,54,4069],[58,79,5651],[78,58,8112],[1,62,1686],[58,67,143],[79,33,4041],[79,1,655],[65,28,8294],[28,38,2799],[34,24,8936],[16,60,8422],[59,83,2174],[79,78,5522],[37,79,6107],[77,59,223]);
dump($a->minScore(83, $arr));