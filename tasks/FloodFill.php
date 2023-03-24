<?php

require __DIR__.'/../vendor/autoload.php';

class Solution {

    /**
     * @param int[][] $image
     * @param int $sr
     * @param int $sc
     * @param int $color
     * @return int[][]
     */
    function floodFill($image, $sr, $sc, $color) {
        $startColor = $image[$sr][$sc];
        $pixelsToRepaint = [
            [$sr, $sc]
        ];
        // foreach ($pixelsToRepaint as $key => $value) {
        //     dump($image[$value[0] + 1][$value[1]]);
        // }
        if ($color == $startColor) return $image;
        while ($pixelsToRepaint != []) {
            foreach ($pixelsToRepaint as $key => $value) {
                dump($pixelsToRepaint);
                if (isset($image[$value[0] + 1][$value[1]]) && $image[$value[0] + 1][$value[1]] == $startColor) {
                    array_push($pixelsToRepaint, [$value[0] + 1, $value[1]]);
                    $image[$value[0] + 1][$value[1]] = $color;
                }
                if (isset($image[$value[0] - 1][$value[1]]) && $image[$value[0] - 1][$value[1]] == $startColor) {
                    array_push($pixelsToRepaint, [$value[0] - 1, $value[1]]);
                    $image[$value[0] - 1][$value[1]] = $color;
                }
                if (isset($image[$value[0]][$value[1] + 1]) && $image[$value[0]][$value[1] + 1] == $startColor) {
                    array_push($pixelsToRepaint, [$value[0], $value[1] + 1]);
                    $image[$value[0]][$value[1] + 1] = $color;
                }
                if (isset($image[$value[0]][$value[1] - 1]) && $image[$value[0]][$value[1] - 1] == $startColor) {
                    array_push($pixelsToRepaint, [$value[0], $value[1] - 1]);
                    $image[$value[0]][$value[1] - 1] = $color;
                }
                unset($pixelsToRepaint[$key]);
            }
        }
        $image[$sr][$sc] = $color;
        return $image;
    }
}
$a = new Solution();

dump($a->floodFill([[1,1,1],[1,1,0],[1,0,1]], 1, 1, 2));

?>

<!DOCTYPE html>
<html lang="en">
<body style="background: black">
</body>
</html>