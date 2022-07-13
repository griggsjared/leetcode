<?php
/**
 * Definition for a binary tree node.
 * class TreeNode {
 *     public $val = null;
 *     public $left = null;
 *     public $right = null;
 *     function __construct($val = 0, $left = null, $right = null) {
 *         $this->val = $val;
 *         $this->left = $left;
 *         $this->right = $right;
 *     }
 * }
 */
class Solution
{
    /**
     * @var array
     */
    private array $result = [];

    /**
     * @param TreeNode|null $root
     * @return array
     */
    function levelOrder(?TreeNode $root) : array
    {
        $this->traverse($root, 0);

        return $this->result;
    }

    /**
     * @param TreeNode|null $node
     * @param integer $level
     * @return void
     */
    function traverse(?TreeNode $node, int $level = 0) : void
    {
        if(is_null($node)) {
            return;
        }

        $this->result[$level][] = $node->val;
        $this->traverse($node->left, $level+1);
        $this->traverse($node->right, $level+1);
    }
}
