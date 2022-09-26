<?php

/*
Question:

We define a magic square to be an n X n matrix of distinct positive integers from 1 to n where the sum of any row, column, or diagonal of length  is always equal to the same number: the magic constant.

You will be given a 3 X 3 matrix s of integers in the inclusive range [1,9]. We can convert any digit a to any other digit b in the range |1 - 9| at cost of s. Given s, convert it into a magic square at minimal cost. Print this cost on a new line.

Note: The resulting magic square must contain distinct integers in the inclusive range [1,9].

Example:
The matrix looks like this:
$s = [
		[5, 3, 4], 
		[1, 5, 8], 
		[6, 4, 2]
	]

We can convert it to the following magic square:
$s = [
		[8, 3, 4], 
		[1, 5, 9], 
		[6, 7, 2]
	]

This took three replacements at a cost of |5 - 8| + |8 - 9| + |4 - 7| = 7.

*/

// Solution
function formingMagicSquare($s) {
    // Write your code here
    // Max cost is 3 x 3 of all 9's => 3 x 3 x 9 = 81; Magic square should be 45
    // 81 - 45 = 36 highest possible value given constraint integer 1-9
    $cost = 36;
    
    // All possible valid magic squares; 5 is center and corners are even pairs.
    $valid = 
        [
            [4, 9, 2, 3, 5, 7, 8, 1, 6],
            [4, 3, 8, 9, 5, 1, 2, 7, 6],
            [2, 9, 4, 7, 5, 3, 6, 1, 8],
            [2, 7, 6, 9, 5, 1, 4, 3, 8],
            [8, 1, 6, 3, 5, 7, 4, 9, 2],
            [8, 3, 4, 1, 5, 9, 6, 7, 2],
            [6, 7, 2, 1, 5, 9, 8, 3, 4],
            [6, 1, 8, 7, 5, 3, 2, 9, 4],
        ];
    $temp = 0;
    
    // Comparing each coordinate of s[][] to all valid[][]s we accumulate the temp cost and update for the lowest cost per each loop; returning lowest cost after the loop
    for($i = 0; $i < count($valid); $i++){
        $temp = abs($s[0][0] - $valid[$i][0]) + 
            abs($s[0][1] - $valid[$i][1]) + 
            abs($s[0][2] - $valid[$i][2]) +
            abs($s[1][0] - $valid[$i][3]) + 
            abs($s[1][1] - $valid[$i][4]) + 
            abs($s[1][2] - $valid[$i][5]) +
            abs($s[2][0] - $valid[$i][6]) + 
            abs($s[2][1] - $valid[$i][7]) + 
            abs($s[2][2] - $valid[$i][8]);
        $cost = $temp < $cost ? $temp : $cost;
    }
    return $cost;
}

$s = [	
		[4, 9, 2],
		[3, 5, 7],
		[8, 1, 5]
	];
echo formingMagicSquare($s);
?>