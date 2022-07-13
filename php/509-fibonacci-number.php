<?php

class Solution
{
    /**
     * @var array
     */
    private array $map = [];

    /**
     * @param integer $n
     * @return integer
     */
    public function fib(int $n) : int
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

        $this->map[$n] = $this->fib($n - 1) + $this->fib($n - 2);

        return $this->map[$n];
    }
}
