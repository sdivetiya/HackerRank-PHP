<?php
/*

PROBLEM:
Given an array of bird sightings where every element represents a bird type id, determine the id of the most frequently sighted type. If more than 1 type has been spotted that maximum amount, return the smallest of their ids.

Example
arr = [1,1,2,2,3];

There are two each of types 1 and 2, and one sighting of type 3. Pick the lower of the two types seen twice: type 1.

Function Description

Complete the migratoryBirds function in the editor below.

migratoryBirds has the following parameter(s):
- int arr[n]: the types of birds sighted


Returns
-int: the lowest type id of the most frequently sighted birds


*/

$arr = [1, 2, 3, 4, 5, 4, 3, 2, 1, 3, 4];
echo migratoryBirds($arr);

// Solution
function migratoryBirds($arr) {
    $counter = [];
    foreach($arr as $val){
        if(!array_key_exists($val, $counter)){
            $counter[$val] = 1;
        }
        else
        {
            $counter[$val] += 1;
        }
    }
    $ar = array_keys($counter, max($counter));
    sort($ar);
    return $ar[0];
}
?>