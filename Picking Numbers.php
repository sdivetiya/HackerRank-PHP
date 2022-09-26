<?php
/*
QUESTION:

Given an array of integers, find the longest subarray where the absolute difference between any two elements is less than or equal to 1.

Example
a = [1,1,2,2,4,4,5,5,5]

There are two subarrays meeting the criterion: [1,1,2,2] and [4,4,5,5,5]. The maximum length subarray has 5 elements.

Function Description
Complete the pickingNumbers function in the editor below.

pickingNumbers has the following parameter(s):
- int a[n]: an array of integers

Returns
- int: the length of the longest subarray that meets the criterion

*/

function pickingNumbers($a) {
    // Write your code here
    sort($a);
    $counter = 0;
    $temp = [];
    for($i = 0; $i < count($a)-1; $i++){
        $value = $a[$i];
        if(!array_key_exists($value, $temp))
        {
            $temp[$value] = [];  
            array_push($temp[$value], $value); 
            for($j = $i+1; $j < count($a); $j++){
                if($a[$i] == $a[$j] || ($a[$i]+1) == $a[$j]){
                    array_push($temp[$value], $a[$j]);
                }
            }
        }
        $count = count($temp[$value]);
        $counter = $count > $counter ? $count : $counter;
    }
    return $counter;
}

$a = [1,1,2,2,4,4,5,5,5];
echo pickingNumbers($a);
?>