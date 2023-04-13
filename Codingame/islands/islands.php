<?php
// code non vérifier
class Solution {
    /*
    @param String[][] $grid
    @return Integer
    */
    function numIslands($grid) {
        $m = count($grid);
        if ($m === 0) {
            return 0;
        }
        $n = count($grid[0]);
        $island = 0;

        for ($i = 0; $i < $m; $i++) {
            for ($j = 0; $j < $n; $j++) {
                if ($grid[$i][$j] === '1') {
                    $island++;
                    $this->dfs($grid, $i, $j);
                }
            }
        }

        return $island;
    }

    function dfs(&$grid, $i, $j) {
        $m = count($grid);
        $n = count($grid[0]);

        if ($i < 0 || $j < 0 || $i >= $m || $j >= $n || $grid[$i][$j] === '0') {
            return;
        }

        $grid[$i][$j] = '0';

        $this->dfs($grid, $i - 1, $j);
        $this->dfs($grid, $i + 1, $j);
        $this->dfs($grid, $i, $j - 1);
        $this->dfs($grid, $i, $j + 1);
    }
}
