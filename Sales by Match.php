<?php

/*

PROBLEM:

There is a large pile of socks that must be paired by color. Given an array of integers representing the color of each sock, determine how many pairs of socks with matching colors there are.

Example
n = 7;
ar = [1,2,1,2,3,2]

There is one pair of color 1 and one of color 2. There are three odd socks left, one of each color. The number of pairs is 2.


Function Description

Complete the sockMerchant function in the editor below.

sockMerchant has the following parameter(s):
- int n: the number of socks in the pile
- int ar[n]: the colors of each sock
Returns

int: the number of pairs

*/

$n = 9;
$ar = [6,5,2,3,5,2,2,1,1,5,1,3,3,3,5];
echo sockMerchant($n, $ar);

// Solution
function sockMerchant($n, $ar) {
    $count_array = [];
    $counter = 0;
    foreach($ar as $val){
        if(!array_key_exists($val, $count_array)){
            $count_array[$val] = 1;
        }
        else{
            $count_array[$val] += 1;
            if($count_array[$val] == 2){
                $counter++;
                $count_array[$val] = 0;
            }
        }
        return $counter;
    }
}

?>