<?php

class Solution {

    /**
     * @param array<integer> $nums1
     * @param array<integer> $nums2
     * @return float
     */
    function findMedianSortedArrays(array $nums1, array $nums2) : float {

        $merged = array_merge($nums1, $nums2);

        sort($merged);

        if(count($merged) % 2 !== 0) {

            $mid = count($merged)/2;

            return $merged[$mid];

        } else {

            $mid1 = (count($merged)-1)/2;
            $mid2 = count($merged)/2;

            return ($merged[$mid1] + $merged[$mid2]) / 2;
        }
    }
}
