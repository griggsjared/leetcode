/**
 * Definition for a binary tree node.
 * function TreeNode(val, left, right) {
 *     this.val = (val===undefined ? 0 : val)
 *     this.left = (left===undefined ? null : left)
 *     this.right = (right===undefined ? null : right)
 * }
 */

 let results = []

 /**
  * @param {TreeNode} root
  * @return {number[][]}
  */
 const levelOrder = root => {
    results = [];
    traverse(root)
    return results
 };

 const traverse = (treeNode, level = 0) => {

    if(treeNode === null) {
        return
    }

    if(typeof results[level] === 'undefined') {
        results[level] = [];
    }

    results[level].push(treeNode.val)
    traverse(treeNode.left, level+1)
    traverse(treeNode.right, level+1)
}
