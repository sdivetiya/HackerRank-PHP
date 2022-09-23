<?php
/*

PROBLEM:

Two children, Lily and Ron, want to share a chocolate bar. Each of the squares has an integer on it.

Lily decides to share a contiguous segment of the bar selected such that:

The length of the segment matches Ron's birth month, and,
The sum of the integers on the squares is equal to his birth day.
Determine how many ways she can divide the chocolate.


*/
$s = [2,2,1,3,2];
$d = 4;
$m = 2;

echo birthday($s, $d, $m);

// Solution
function birthday($s, $d, $m) {
    $counter = 0;
    for($i = 0; $i <= count($s)-$m; $i++){
        $sum = $s[$i];
        for($j = 1; $j < $m; $j++){
            $sum += $s[$i+$j];
        }
        if($sum == $d){
            $counter++;
        }
    }
    return $counter;
}
?>