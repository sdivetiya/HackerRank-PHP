<?php

/*

QUESTION:

A jail has a number of prisoners and a number of treats to pass out to them. Their jailer decides the fairest way to divide the treats is to seat the prisoners around a circular table in sequentially numbered chairs. A chair number will be drawn from a hat. Beginning with the prisoner in that chair, one candy will be handed to each prisoner sequentially around the table until all have been distributed.

The jailer is playing a little joke, though. The last piece of candy looks like all the others, but it tastes awful. Determine the chair number occupied by the prisoner who will receive that candy.

Example
n = 4
m = 6
s = 2

There are 4 prisoners, 6 pieces of candy and distribution starts at chair 2. The prisoners arrange themselves in seats numbered 1 to 4. Prisoners receive candy at positions 2,3,4,1,2,3. The prisoner to be warned sits in chair number 3.

*/

// Solution
function saveThePrisoner($n, $m, $s) {
    // Write your code here
    if ($n == 1)
    {
        return 1;
    }
    $result = (($m + $s) % $n) - 1;
    if ($result <= 0)
    {
        return $result + $n;
    }
    return $result;
}

$n = 352926151;
$m = 380324688;
$s = 94730870;
echo saveThePrisoner($n, $m, $s);
?>