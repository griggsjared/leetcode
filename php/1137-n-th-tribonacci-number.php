<?php

class Solution
{

    /**
     * @var array
     */
    private array $map = [];

    /**
     * @param int $n
     * @return integer
     */
    public function tribonacci(int $n) : int
    {
        if($n == 0) {
            return 0;
        }

        if($n <= 2) {
            return 1;
        }

        if(isset($this->map[$n])) {
            return $this->map[$n];
        }

        $this->map[$n] = $this->tribonacci($n - 3) + $this->tribonacci($n - 2) + $this->tribonacci($n - 1);

        return $this->map[$n];
    }
}
