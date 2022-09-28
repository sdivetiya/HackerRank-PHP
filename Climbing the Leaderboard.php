<?php
/*
QUESTION:

An arcade game player wants to climb to the top of the leaderboard and track their ranking. The game uses Dense Ranking, so its leaderboard works like this:

The player with the highest score is ranked number  on the leaderboard.
Players who have equal scores receive the same ranking number, and the next player(s) receive the immediately following ranking number.

*/

// Solution
function climbingLeaderboard($ranked, $player) {

    $ans = [];
    foreach($player as $p)
    {
        $ranked[count($ranked)] = $p;
        arsort($ranked);
        $no=1;
        foreach($ranked as $m)
        {
            $status=1;
            if($m == next($ranked)){
                $status=0;                
            }else{
                $no++;               
            }
            if($m==$p && $status)
            {
                array_push($ans, ($no-1));
            }
        }
    }
    return $ans;
}

$ranked = [100, 100, 50, 40, 40, 20, 10];
$player = [5, 25, 50, 120];
print_r(climbingLeaderboard($ranked, $player));
?>