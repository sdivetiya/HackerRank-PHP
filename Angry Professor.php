<?php
/*

QUESTION:

A Discrete Mathematics professor has a class of students. Frustrated with their lack of discipline, the professor decides to cancel class if fewer than some number of students are present when class starts. Arrival times go from on time (ArrivalTime <= 0) to arrived late (ArrivalTIme > 0).

Given the arrival time of each student and a threshhold number of attendees, determine if the class is cancelled.

*/

// Solution
function angryProfessor($k, $a) {
    // Write your code here
    $on = 0;
    $late = 0;
    foreach($a as $stud){
        if($stud <= 0){
            $on++;
        }
        else{
            $late++;
        }
    }
    if($on >= $k){
        return 'NO';
    }
    return 'YES';
}

$k = 3;
$a = [-1, -3, 4, 2];
echo angryProfessor($k, $a);
?>