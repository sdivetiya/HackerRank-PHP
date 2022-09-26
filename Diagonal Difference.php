<?php
/*

PROBLEM:

Given a square matrix, calculate the absolute difference between the sums of its diagonals.

For example, the square matrix  is shown below:

1 2 3
4 5 6
9 8 9  
The left-to-right diagonal = 1 + 5 + 9 = 15. The right to left diagonal = 3 + 5 + 9 = 17. Their absolute difference is (15 - 17) = 2.

Function description

Complete the "Diagonal Difference" function in the editor below.

diagonalDifference takes the following parameter:
- int arr[n][m]: an array of integers

Return
- int: the absolute diagonal difference

*/

// Solution
function diagonalDifference($arr) {
    
    $counter1 = $counter2 = 0;

    for( $i = 0; $i < count($arr); $i++ ) {
        $counter1 += $arr[$i][$i]; 
    }
    
    for( $i = 0; $i < count($arr); $i++ ){
        for( $j = count($arr)-1; $j > 0; $j-- ) {
            $counter2 += $arr[$i][$j-$i];
            break;
        }
    }
    return abs($counter1 - $counter2);
}

$arr = [
		[11, 2, 4],
		[4, 5, 6],
		[10, 8, -12]
	];
echo diagonalDifference($arr);

?>