<?php

require __DIR__.'/../vendor/autoload.php';

class Solution {

    /**
     * @param int[][] $edges
     * @return int
     */
    function findCenter($edges) {
        $center1 = $edges[0][0];
        $center1Count = 0;
        $center2 = $edges[0][1];
        $center2Count = 0;
        foreach ($edges as $value) {
            if ($value[0] == $center1 || $value[1] == $center1)
                $center1Count++;
            elseif ($value[0] == $center2 || $value[1] == $center2)
                $center2Count++;
        }
        return ($center1Count > $center2Count) ? $center1 : $center2;
    }
}

$a = new Solution();
dump($a->findCenter([[1,2],[5,1],[1,3],[1,4]]));