<?php
/*

QUESTION:

The Utopian Tree goes through 2 cycles of growth every year. Each spring, it doubles in height. Each summer, its height increases by 1 meter.

A Utopian Tree sapling with a height of 1 meter is planted at the onset of spring. How tall will the tree be after n growth cycles?

For example, if the number of growth cycles is n = 5, the calculations are as follows:


*/

// Solution
function utopianTree($n) {
    // Write your code here
    if($n == 0){
        return 1;
    }
    $counter = 1;
    for($i = 1; $i <= $n; $i++){
        if($i % 2 == 0){
            $counter++;
        }
        else{
            $counter = $counter * 2;
        }
    }
    return $counter;
        
}

$n = 5;
echo utopianTree($n);

?>