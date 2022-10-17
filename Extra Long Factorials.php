<?php

/*
PROBLEM:

The factorial of the integer n. written n!. is defined as:
n! = n * (n- 1) * (n-2) * . . . * 3 * 2 * 1

Calculate and print the factorial of a given integer.

For example, 
if n = 30. we calculate 30 x 29x 28 x ... x2 x l and get 265252859812191058636308480000000.

Function Description
Complete the extraLongFactorials function in the editor below. It should print the result and
return.
extraLongFactorials has the folloWing parameter(s):
n: an integer

*/

// Solution
function extraLongFactorials($n) {
    print calculate($n);
}

function calculate($n) {
    // Write your code here
    if($n == 1){
        return $n;
    }
    return bcmul($n, calculate($n - 1));
    
}

echo extraLongFactorials(25);
?>