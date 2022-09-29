<?php
/*
QUESTION:

An arcade game player wants to climb to the top of the leaderboard and track their ranking. The game uses Dense Ranking, so its leaderboard works like this:

The player with the highest score is ranked number  on the leaderboard.
Players who have equal scores receive the same ranking number, and the next player(s) receive the immediately following ranking number.

*/

// Solution
function climbingLeaderboard($ranked, $player) {

    $result = [];
    $ranked = array_unique($ranked, SORT_NUMERIC);
    rsort($ranked);
    $rank = count($ranked)-1;

    foreach($player as $v){
        while($rank >= 0){
            if($rank > count($ranked)-1){
                $rank = count($ranked)-1;
            }
            if($v >= $ranked[$rank]){
                $rank--;
            } else {
                $rank = $rank+2;
                break;
            }
        }
        if($rank < 0){
            $rank = 1;
        }
        array_push($result, $rank);
    }
    return $result;
}

$ranked = [100, 100, 50, 40, 40, 20, 10];
$player = [5, 25, 50, 120];
print_r(climbingLeaderboard($ranked, $player));
?>