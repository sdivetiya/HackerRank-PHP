<?php
/*
QUESTION:

An avid hiker keeps meticulous records of their hikes. During the last hike that took exactly "steps" steps, for every step it was noted if it was an uphill, U, or a downhill, D step. Hikes always start and end at sea level, and each step up or down represents a 1 unit change in altitude. We define the following terms:

- A mountain is a sequence of consecutive steps above sea level, starting with a step up from sea level and ending with a step down to sea level.
- A valley is a sequence of consecutive steps below sea level, starting with a step down from sea level and ending with a step up to sea level.


Given the sequence of up and down steps during a hike, find and print the number of valleys walked through.

Example

steps = 8
path = [DDUUUUDD] 

The hiker first enters a valley  units deep. Then they climb out and up onto a mountain  units high. Finally, the hiker returns to sea level and ends the hike.


Function Description

Complete the countingValleys function in the editor below.

countingValleys has the following parameter(s):
- int steps: the number of steps on the hike
- string path: a string describing the path

Returns
- int: the number of valleys traversed

*/

// Solution
function countingValleys($steps, $path) {
    $altitude = 0;
    $valleys = 0;
    for($i = 0; $i < $steps; $i++){
        if($path[$i] == "D"){
            $altitude--; 
        }
        if($path[$i] == "U"){
            if($altitude == -1)
            {
                $valleys++;
            }
            $altitude++; 
        }
    }
    return $valleys;
}

$steps = 8;
$path = [D,D,U,U,U,U,D,D]
echo countingValleys($steps, $path);
?>