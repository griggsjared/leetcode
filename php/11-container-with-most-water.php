<?php

class Solution {

    /**
     * @param array<integer> $height
     * @return integer
     */
    public function maxArea(array $height) : int {

        $n = count($height);

        $l = 0;

        $r = $n-1;

        $result = 0;

        while($l < $r) {

            $currArea = $this->min($height[$l], $height[$r]) * ($r - $l);

            $result = $this->max($result, $currArea);

            if($height[$l] < $height[$r]) {
    			$l++;
    		} else {
    			$r--;
    		}

        }

        return $result;
    }

    /**
     * @param integer $a
     * @param integer $b
     * @return integer
     */
    public function min(int $a, int $b) : int {
        if($a < $b) {
            return $a;
        }
        return $b;
    }

    /**
     * @param integer $a
     * @param integer $b
     * @return integer
     */
    public function max(int $a, int $b) : int {
        if($a > $b) {
            return $a;
        }
        return $b;
    }
}
