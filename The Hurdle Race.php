<?php
/*
QUESTION:

A video player plays a game in which the character competes in a hurdle race. Hurdles are of varying heights, and the characters have a maximum height they can jump. There is a magic potion they can take that will increase their maximum jump height by 1 unit for each dose. How many doses of the potion must the character take to be able to jump all of the hurdles. If the character can already clear all of the hurdles, return 0.

$k = 4;
$height = [1, 6, 3, 5, 2];

*/

// Solution
function hurdleRace($k, $height) {
    // Write your code here
    $max = max($height);
    if($max > $k){
        return $max - $k;
    }
    return 0;
}

$k = 4;
$height = [1, 6, 3, 5, 2];
echo hurdleRace($k, $height);

?>