<?php
/**
 * Works but is too slow to pass as a solutuon
 */
class Solution
{
    /**
     * @param string $s
     * @return string
     */
    public function longestPalindrome(string $s) : string
    {
        if($this->isPalindrome($s) || strlen($s) === 1) {
            return $s;
        }

        if(strlen($s) === 0) {
            return '';
        }

        $length = strlen($s);
        $window = $length-1;

        while($window) {
            for($i = 0; $i <= ($length-$window); $i++) {
                $subString = substr($s, $i, $window);
                if($this->isPalindrome($subString)) {
                    return $subString;
                }
            }
            $window--;
        }

        return '';

    }


    private function isPalindrome(string $s) : bool
    {
        return $s === strrev($s);
    }
}
