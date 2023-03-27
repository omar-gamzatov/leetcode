<?php
class Solution {

    /**
     * @param int $m
     * @param int $n
     * @param string[][] $grid
     * @param int[][] $visited
     * @return bool
     */
    public function bfs($m, $n, $grid, &$visited, $i, $j): bool {
        $isClosed = true;
        $stack = [array($i, $j)];
        while($stack != []) {
            foreach ($stack as $key => $indexes) {
                $i = $indexes[0];
                $j = $indexes[1];
                if ($visited[$i][$j] == 0 && (isset($grid[$i + 1][$j]) && $grid[$i + 1][$j] == 0 && $visited[$i + 1][$j] == 0)) {
                    array_push($stack, [$i + 1, $j]);
                } elseif (!isset($grid[$i + 1][$j])) $isClosed = false;
                
                if ($visited[$i][$j] == 0 && (isset($grid[$i - 1][$j]) && $grid[$i - 1][$j] == 0 && $visited[$i - 1][$j] == 0)) {
                    array_push($stack, [$i - 1, $j]);
                } elseif (!isset($grid[$i - 1][$j])) $isClosed = false;
                
                if ($visited[$i][$j] == 0 && (isset($grid[$i][$j + 1]) && $grid[$i][$j + 1] == 0 && $visited[$i][$j + 1] == 0)) {
                    array_push($stack, [$i, $j + 1]);
                } elseif (!isset($grid[$i][$j + 1])) $isClosed = false;
                
                if ($visited[$i][$j] == 0 && (isset($grid[$i][$j - 1]) && $grid[$i][$j - 1] == 0 && $visited[$i][$j - 1] == 0)) {
                    array_push($stack, [$i, $j - 1]);
                } elseif (!isset($grid[$i][$j - 1])) $isClosed = false;
                
                $visited[$i][$j] = 1;
                unset($stack[$key]);
            }
        }
        return $isClosed;
    }
    /**
     * @param string[][] $grid
     * @return int
     */
    function closedIsland($grid) {
        $count = 0;
        $m = count($grid);
        $n = count($grid[0]);
        $visited = array_fill(0, $m, array_fill(0, $n, 0));
        for ($i = 0; $i < $m; $i++) { 
            for ($j = 0; $j < $n; $j++) { 
                if ($visited[$i][$j] == 0 && $grid[$i][$j] == 0 && $this->bfs($m, $n, $grid, $visited, $i, $j)) {
                    $count++;
                }
            }
        }
        return $count;
    }
}

$arr = [[1,1,1,1,1,1,1,0],[1,0,0,0,0,1,1,0],[1,0,1,0,1,1,1,0],[1,0,0,0,0,1,0,1],[1,1,1,1,1,1,1,0]];

$a = new Solution();

echo($a->closedIsland($arr));