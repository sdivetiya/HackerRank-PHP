<?php

/*

PROBLEM:

There will be two arrays of integers. Determine all integers that satisfy the following two conditions:

The elements of the first array are all factors of the integer being considered
The integer being considered is a factor of all elements of the second array
These numbers are referred to as being between the two arrays. Determine how many such numbers exist.

*/

// Solution
function getTotalX($a, $b) {
        
    $result = 0;
    for ($i = $a[count($a) -1]; $i <= $b[0]; $i++) {
        $countA = 0;
        $countB = 0;
        foreach($a as $element) {
            if ($i % $element == 0) 
                $countA++;
        }
        foreach($b as $element) {
            if ($element % $i == 0) 
                $countB++;
        }
        if ($countA == count($a) && $countB == count($b)) {
            $result++;
        }
    }
    return $result;
}


$a = [2, 6];
$b = [24,36];

echo getTotalX($a, $b);

?>