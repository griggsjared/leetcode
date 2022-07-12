<?php

class Solution {

    /**
     * @param array<integer> $nums
     * @param integer $target
     * @return integer
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
