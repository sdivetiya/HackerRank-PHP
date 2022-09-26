<?php
/*
QUESTION:

Two cats and a mouse are at various positions on a line. You will be given their starting positions. Your task is to determine which cat will reach the mouse first, assuming the mouse does not move and the cats travel at equal speed. If the cats arrive at the same time, the mouse will be allowed to move and it will escape while they fight.

You are given q queries in the form of x, y, and z representing the respective positions for cats A and B, and for mouse C. Complete the function  to return the appropriate answer to each query, which will be printed on a new line.

If cat  catches the mouse first, print Cat A.
If cat  catches the mouse first, print Cat B.
If both cats reach the mouse at the same time, print Mouse C as the two cats fight and mouse escapes.
Example

x = 2
y = 5
z = 4

The cats are at positions 2 (Cat A) and 5 (Cat B), and the mouse is at position 4. Cat B, at position  will arrive first since it is only 1 unit away while the other is 2 units away. Return 'Cat B'.

Function Description
Complete the catAndMouse function in the editor below.

catAndMouse has the following parameter(s):
- int x: Cat A's position
- int y: Cat B's position
- int z: Mouse C's position

Returns
- string: Either 'Cat A', 'Cat B', or 'Mouse C'

*/

// Solution
function catAndMouse($x, $y, $z) {
    $cat1 = abs($x-$z);
    $cat2 = abs($y-$z);
    if($cat1 < $cat2){
        return "Cat A";
    }
    else if($cat2 < $cat1){
        return "Cat B";
    }
    else {
        return "Mouse C";
    }

}

$x = 2;
$y = 5;
$z = 4;
echo catAndMouse($x, $y, $z);
?>