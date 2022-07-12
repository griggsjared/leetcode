<?php

class Solution {

    /**
     * @param Integer[] $nums
     * @param Integer $target
     * @return Integer
     */
    function search(array $nums, int $target) : int {

        $low = 0;
        $high = count($nums) - 1;

        while($low <= $high) {
            $mid = round(($low+$high)/2);

            if($nums[$mid] == $target) {
                return $mid;
            }

            if($target < $nums[$mid]) {
                $high = $mid-1;
            } else {
                $low = $mid+1;
            }
        }

        return -1;
    }
}
