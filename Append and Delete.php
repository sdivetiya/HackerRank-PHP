<?php
/*

PROBLEM:

You have two strings of lowercase English letters. You can perform two types of operations on the first string:

1. Append a lowercase English letter to the end of the string.
2. Delete the last character of the string. Pertorming this operation on an empty string results in an empty string.

Given an integer, k, and two strings, s and t. determine whether or not you can convert s to t by performing exactly k of the above operations on s. If it's possible, print Yes. Otherwise. print No.

Example. 
s = [a, b, c]
t = [d, e, f]
k = 6

To Convert s to t. we first delete all of the characters in 3 moves. Next we add each of the characters of t in order. On the 6" move, you will have the matching string. Return Yes.

If there were more moves available, they could have been eliminated by performing multiple deletions on an empty string. If there were fewer than 6 moves, we would not have succeeded in creating the new string.
*/

// Solution
function appendAndDelete($s, $t, $k) {
    // Write your code here
    $clean = strlen($s) < $k;
    $cleaned = false;
    while($k-- > 0){
        if((strpos($t, $s) !== 0 && !$cleaned) || $clean) {
            $s = substr($s, 0, strlen($s) -1);
            if($s == "") {
                $cleaned = true; 
                $clean = false;
            }
            continue;
        }
        $s .= $t[strlen($s)];
        if($s == $t) {
            return "Yes";
        }
    }
    return "No";
}

$s = "abc";
$t = "def";
$k = 6;

return appendAndDelete($s, $t, $k);
?>