<?php

/**
 * Definition for a singly-linked list.
 * class ListNode {
 *     public $val = 0;
 *     public $next = null;
 *     function __construct($val = 0, $next = null) {
 *         $this->val = $val;
 *         $this->next = $next;
 *     }
 * }
 */

class Solution {

    /**
     * @param ListNode $l1
     * @param ListNode $l2
     * @return ListNode
     */
    public function addTwoNumbers(ListNode $l1, ListNode $l2) : ListNode
    {
        $numbers = str_split(bcadd($this->extractNumber($l1), $this->extractNumber($l2)));

        $previous = null;
        foreach($numbers as $number) {
            $node = new ListNode($number, $previous);
            $previous = $node;

        }
        return $node;
    }


    /**
     * @param ListNode $node
     * @return string
     */
    public function extractNumber(ListNode $node) : string
    {
        $extracted = [];

        while(!is_null($node)) {
            $extracted[] = $node->val;
            $node = $node->next;
        }

        return implode(array_reverse($extracted));
    }
}
