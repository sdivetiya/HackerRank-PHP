<?php

/*
QUESTION:

Given a sequence of n integers. p(1), P(2),...,p(n) where each element is distinct and
satisfies 1 <= p(T) <= n. For each x where 1 <= x <= n. that is x increments from 1 to n. find
any integer y such that p(p(Y)) === x and keep a history of the values of y in a return array.

Example
P = [5, 2, 1, 3, 4]
Each value of g between 1 and 5. the length of the sequence, is analyzed as follows:

1. x = 1 = p[3], p[4] = 3. so p[p[4]] = 1
2. x = 2 = p[2], p[2] = 2. so p[p[2]] = 2
1. x = 3 = p[4], p[5] = 4. so p[p[5]] = 3
1. x = 4 = p[5], p[1] = 5. so p[p[1]] = 4
1. x = 5 = p[1], p[3] = 1. so p[p[3]] = 5

The values for y are [4, 2, 5, 1, 3].

*/

// Solution
function permutationEquation($p) {
    // Write your code here
    $min = min($p);
    $max = max($p);
    $res = [];
    for($i = $min; $i <= $max; $i++){
        array_push($res, array_search((array_search($i, $p)+1), $p)+1);
    }
    return $res;
}

$p = [5, 2, 1, 3, 4];
print_r(permutationEquation($p));
?>