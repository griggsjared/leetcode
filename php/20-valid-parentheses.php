<?php

class Solution {

    /**
     * @var array $validPairs
     */
    private array $validPairs = [
        '[' => ']',
        '{' => '}',
        '(' => ')'
    ];

    /**
     * @param String $s
     * @return Boolean
     */
    function isValid(string $s) : bool {

        if(strlen($s) === 1 || strlen($s) % 2 !== 0) {
            return false;
        }

        $stack = [];

        for($i = 0; $i < strlen($s); $i++) {

            if(isset($this->validPairs[$s[$i]])) {
                $stack[] = $s[$i];
            } else {

                if(empty($stack)) {
                    return false;
                }

                $closing = array_pop($stack);

                if($this->validPairs[$closing] !== $s[$i]) {
                    return false;
                }
            }
        }

        return empty($stack);
    }
}
