<?php
/*

PROBLEM:

Given an array of integers and a positive integer k, determine the number of (i,j) pairs where i < j and ar[i] + ar[j] is
divisible by k.

Example
ar = [1, 2, 3, 4, 5, 6];
k = 5;

Three pairs meet the criteria: [1, 4], [2, 3], and [4, 6].

Function Description

Complete the divisibleSumPairs function in the editor below.
divisibleSumPairs has the following parameter(s):

- int n: the length of array 
- int ar[n]: an array of integers
- int k: the integer divisor

Returns
- int: the number of pairs

*/

// Solution
function divisibleSumPairs($n, $k, $ar) {
    $counter = 0;
    $matched = [];
    for($i = 0; $i < $n; $i++){
        for($j = 0; $j < $n; $j++){
            if($i != $j){
                if(($ar[$i] + $ar[$j]) == $k || (abs($ar[$i] + $ar[$j]) % $k) == 0){
                    $counter++;
                }
            }
        }   
    }
    return abs($counter/2);
}


$n = 6;
$k = 3;
$ar = [1, 3, 2, 6, 1, 2];
echo divisibleSumPairs($n, $k, $ar);

?>