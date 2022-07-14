<?php
//Not very fast but it works

class Solution {

    /**
     * @param string $s
     * @param integer $numRows
     * @return string
     */
    function convert(string $s, int $numRows) : string
    {
        if($numRows === 1) {
            return $s;
        }

        $matrix = [];

        $col = 0;
        $row = 0;
        $i = 0;

        $direction = 'down';

        while($i < strlen($s)) {

            $matrix[$col][$row] = $s[$i];

            if($direction === 'down') {
                $row++;
            } else {
                $row--;
                $col++;
            }

            if($row === $numRows-1) {
                $direction = 'up';
            } elseif($row === 0) {
                $direction = 'down';
            }

            $i++;
        }

        $result = '';

        for($r = 0; $r < $numRows; $r++) {
            for($c = 0; $c < count($matrix); $c++) {
                $result  .= $matrix[$c][$r] ?? '';
            }
        }

        return $result;
    }
}
