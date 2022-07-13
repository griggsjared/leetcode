<?php
class Solution
{
    /**
     * @param array<integer> $nums
     * @param integer $target
     * @return array<integer>
     */
    public function twoSum(array $nums, int $target) : array
    {

        $indexMap = [];
        for($i = 0; $i < count($nums); $i++ ) {
            $number = $target - $nums[$i];
            if(isset($indexMap[$number])) {
                return [$indexMap[$number], $i];
            }
            $indexMap[$nums[$i]] = $i;
        }
        return [];
    }
}
