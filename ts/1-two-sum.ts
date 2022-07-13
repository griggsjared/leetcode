function twoSum(nums: number[], target: number): number[] {
    let hashMap : Record<number, number> = {}

    let i: number;

    for(i = 0; i < nums.length; i++) {
        const num: number = target - nums[i]
        if(hashMap[num] !== undefined) {
            return [hashMap[num], i]
        }
        hashMap[nums[i]] = i
    }
    return [];
};

