<?php
/*

QUESTION:

Lily likes to play games with integers. She has created a new game where she determines the difference between a number and its reverse. For instance, given the number 12, its reverse is 21. Their difference is 9. The number 120 reversed is 21, and their difference is 99.

She decides to apply her game to decision making. She will look at a numbered range of days and will only go to a movie on a beautiful day.

Given a range of numbered days, [i ... j] and a number k, determine the number of days in the range that are beautiful. Beautiful numbers are defined as numbers where |i-reverce(i)| is evenly divisible by k. If a day's value is a beautiful number, it is a beautiful day. Return the number of beautiful days in the range.

*/

// Solution
function beautifulDays($i, $j, $k) {
    // Write your code here
    $counter = 0;
    for($l = $i; $l <= $j; $l++){
        $reverced = strrev($l);
        if(!is_float((abs($reverced)-$l)/$k)){
            $counter++;
        }
    }
    return $counter;
}

$i = 20;
$j = 23;
$k = 6;
echo beautifulDays($i, $j, $k);
?>