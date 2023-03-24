<!DOCTYPE html>
<html lang="en">
<body style="background-color: black; color: white">
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
    public function bfs($m, $n, $grid, $visited): void {
        for ($i = 0; $i < $m; $i++) { 
            for ($j = 0; $j < $n; $j++) { 
                if ($visited[$i][$j] != 1) {
                    if (isset($grid[$i + 1][$j]) && $grid[$i + 1][$j] == 1) {
                        
                    }
                }
            }
        }

    }
    /**
     * @param string[][] $grid
     * @return int
     */
    function numIslands($grid) {
        $m = count($grid);
        $n = count($grid[0]);
        $visited = array_fill(0, $m, array());
        $this->bfs($m, $n, $grid, $visited);
        return 0;
    }
}


$arr = [
    ["1","0","1","1"],
    ["1","0","0","1"],
    ["1","0","0","0"],
    ["0","0","1","1"]
];


$a = new Solution();

dump($a->numIslands($arr));

?>

</body>
</html>