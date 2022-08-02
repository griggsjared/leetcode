<?php

class Solution
{

    /**
     * @param array $strs
     * @return string
     */
    function longestCommonPrefix(array $strs) : string
    {
        if(empty($strs)) {
            return '';
        }

        if(count($strs) === 0) {
            return '';
        }

        if(count($strs) === 1) {
            return $strs[0];
        }

        $output = '';
        $masterStr = array_shift($strs);
        $ended = false;
        for($i = 0; $i < strlen($masterStr); $i++) {
            if(!$ended) {
                $try = $output . $masterStr[$i];
                foreach($strs as $str) {
                    if(!str_starts_with($str, $try)){
                        $ended = true;
                        break;
                    }
                }
                if(!$ended) {
                    $output = $try;
                }
            }
        }
        return $output;
    }
}
