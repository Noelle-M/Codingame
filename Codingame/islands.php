<?php
class Solution {
    /*
    @param String[][] $grid
    @return Integer
    */
    function numIslands($grid) {
        $m = count($grid);
        $n = 0;
        foreach($grid as $value){
            $n++;
        }
        $island = 0;
        if($m <= 1 && $n <= 300){
            for($i = 0; $i <= $m; $i++){
                for($i2 = 0; $i2 <= $n; $i2++){
                    if($i2 === 1){
                        $island++;
                    }
                }
            }
        }
        return $island;
    }
}
