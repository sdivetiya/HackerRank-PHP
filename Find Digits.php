<?php

/*

QUESTION:

An integer d is a divisor of an integer n if the remainder of n % d = 0.

Given an integer, for each digit that makes up the integer determine whether it is a divisor. Count the number of divisors occurring within the integer.

Example

n = 124
Check whether 1, 2 and 4 are divisors of 124. All 3 numbers divide evenly into 124 so return 3.

m = 10
Check whether 1 and 0 are divisors of 10. 1 is, but 0 is not. Return 1.
*/

// Solution
function findDigits($n) {
    // Write your code here
    $counter = 0;
    $arr = str_split($n);
    foreach($arr as $value){
        if($value != 0 && $n % $value == 0){
            $counter++;
        }
    }
    return $counter;
}

echo findDigits(124);

?>