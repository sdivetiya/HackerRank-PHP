<?php
/*

PROBLEM:

Watson likes to challenge Sherlock's math ability. He will provide a starting and ending value that describe a range of integers, inclusive of the endpoints. sherlock must determine the number of square integers within that range.

Note: A square integer is an integer which is the square of an integer, e.g. 1,4, 9, 16, 25.

Example:
a = 24
b = 49

There are three square integers in the range: 25, 36 and 49. Return 3.

*/

// Solution
function squares($a, $b) {
    // Write your code here
    $counter = 0;
    $sqrt_a = floor(sqrt($a));
    $sqrt_b = round(sqrt($b));
  
    for($i = $sqrt_a; $i <= $sqrt_b; $i++){
        $square = $i*$i;
        if($square >= $a && $square <= $b){
            $counter++;
        }
    }
        
    return $counter;
}

echo squares(24, 49);
?>