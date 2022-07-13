<?php

class Solution {

    /**
     * @param string $s
     * @return integer
     */
    public function lengthOfLongestSubstring(string $s) : int {

        $max = 0;

        $position = 0;

        $found = [];

        for($i = 0; $i < strlen($s); $i++) {

            //slide the window
            if(isset($found[$s[$i]]) && $found[$s[$i]] >= $position) {
                $position = $found[$s[$i]] + 1;
            }

            //lenght of current window is greater than old max?
            if(($i - $position + 1) > $max) {
                $max = $i - $position + 1;
            }

            //found char and index
            $found[$s[$i]] = $i;
        }

        return $max;
    }
}
