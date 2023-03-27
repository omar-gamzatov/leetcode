<!DOCTYPE html>
<html lang="en">
<body style="background: black; color: white">


<?php

require __DIR__.'/../vendor/autoload.php';

class Solution {

    /**
     * @param int $m
     * @param int $n
     * @param string[][] $grid
     * @param int[][] $visited
     * @return int
     */
    public function bfs($m, $n, &$grid, &$visited, $i, $j): int {
    $cnt = 0;
    	$isClosed = true;
        $stack = [array($i, $j)];
        while($stack != []) {
            foreach ($stack as $key => $indexes) {
                $i = $indexes[0];
                $j = $indexes[1];
                if ($visited[$i][$j] == 0 && (isset($grid[$i + 1][$j]) && $grid[$i + 1][$j] == 1 && $visited[$i + 1][$j] == 0)) {
                    array_push($stack, [$i + 1, $j]);
                } else {
                    $isClosed = false;
                    $grid[$i][$j] = 5;
                }
                if ($visited[$i][$j] == 0 && (isset($grid[$i - 1][$j]) && $grid[$i - 1][$j] == 1 && $visited[$i - 1][$j] == 0)) {
                    array_push($stack, [$i - 1, $j]);
                } else {
                    $isClosed = false;
                    $grid[$i][$j] = 5;
                }
                if ($visited[$i][$j] == 0 && (isset($grid[$i][$j + 1]) && $grid[$i][$j + 1] == 1 && $visited[$i][$j + 1] == 0)) {
                    array_push($stack, [$i, $j + 1]);
                } else {
                    $isClosed = false;
                    $grid[$i][$j] = 5;
                }
                if ($visited[$i][$j] == 0 && (isset($grid[$i][$j - 1]) && $grid[$i][$j - 1] == 1 && $visited[$i][$j - 1] == 0)) {
                    array_push($stack, [$i, $j - 1]);
                } else {
                    $isClosed = false;
                    $grid[$i][$j] = 5;
                }
                if ($isClosed) $cnt++;
                // if ($isClosed)
                $visited[$i][$j] = 1;
                unset($stack[$key]);
            }
        }
       return $cnt;
    }
    /**
     * @param string[][] $grid
     * @return int
     */
    function numEnclaves(&$grid) {
        $count = 0;
        $m = count($grid);
        $n = count($grid[0]);
        $visited = array_fill(0, $m, array_fill(0, $n, 0));
        for ($i = 0; $i < $m; $i++) { 
            for ($j = 0; $j < $n; $j++) { 
                if ($visited[$i][$j] == 0 && $grid[$i][$j] == 1) {
                    $count += $this->bfs($m, $n, $grid, $visited, $i, $j);
                }
            }
        }
        return $count;
    }
}
$arr = [[1, 0, 0, 0],
        [0, 1, 0, 1],
        [0, 0, 0, 1]
];
foreach ($arr as $key => $i) {
    foreach ($i as $key => $j) {
        echo "$j ";
    }
    echo "<br>";
}
$a = new Solution();

dump($a->numEnclaves($arr));
foreach ($arr as $key => $i) {
    foreach ($i as $key => $j) {
        echo "$j ";
    }
    echo "<br>";
}

?>
</body>
</html>