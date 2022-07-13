<?php

class Solution {

    /**
     * @var array
     */
    private array $map = [
        [ 'value' => 1000, 'symbol' => 'M'],
        [ 'value' => 900, 'symbol' => 'CM'],
        [ 'value' => 500, 'symbol' => 'D'],
        [ 'value' => 400, 'symbol' => 'CD'],
        [ 'value' => 100, 'symbol' => 'C'],
        [ 'value' => 90, 'symbol' => 'XC'],
        [ 'value' => 50, 'symbol' => 'L'],
        [ 'value' => 40, 'symbol' => 'XL'],
        [ 'value' => 10, 'symbol' => 'X'],
        [ 'value' => 9, 'symbol' => 'IX'],
        [ 'value' => 5, 'symbol' => 'V'],
        [ 'value' => 4, 'symbol' => 'IV'],
        [ 'value' => 1, 'symbol' => 'I']
    ];

    /**
     * @param integer $num
     * @return string
     */
    public function intToRoman(int $num) : string {

        $result = '';
        $i = 0;

        while($num > 0) {
            if($num - $this->map[$i]['value'] >= 0) {
                $result .= $this->map[$i]['symbol'];
                $num -= $this->map[$i]['value'];
            } else {
                $i++;
            }
        }

        return $result;
    }
}
