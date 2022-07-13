<?php

class Solution {

    /**
     * @param int $x
     * @return boolean
     */
    public function isPalindrome(int $x) : bool
    {
        $number = str_split((string) $x);

        $backwards = array_reverse($number);

        return implode($number) == implode($backwards);
    }
}
