<?php
/*

QUESTION:

HackerLand Enterprise is adopting a new viral advertising strategy. When they launch a new product, they advertise it to exactly 5 people on social media.

On the first day, half of those  people (i.e., floor(5/2) = 2) like the advertisement and each shares it with 3 of their friends. At the beginning of the second day, floor(5/2) * 3 = 6 people receive the advertisement.

Each day, floor(recipents/2) of the recipients like the advertisement and will share it with 3 friends on the following day. Assuming nobody receives the advertisement twice, determine how many people have liked the ad by the end of a given day, beginning with launch day as day 1.

EX: 

Day Shared Liked Cumulative
1      5     2       2
2      6     3       5
3      9     4       9
4     12     6      15
5     18     9      24


- INPUT:
   n = 5
- OUTPUT:
   24

*/


// Solution
function viralAdvertising($n) {
    // Write your code here
    $liked = 0;
    $com = 0;
    $shares = 5;
    for($i = 1; $i <= $n; $i++){
        $liked = floor($shares/2);
        if($com == 0){
            $com = $liked;
        }
        else{
            $com = $com + $liked;
        }
        $shares = $liked * 3;
    }
    return $com;
}

echo viralAdvertising(5);
?>