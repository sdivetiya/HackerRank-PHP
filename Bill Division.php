<?php

/*

PROBLEM:

Two friends Anna and Brian, are deciding how to split the bill at a dinner. Each will only pay for the items they consume. Brian gets the check and calculates Anna's portion. You must determine if his calculation is correct.

*/

// Solution
function bonAppetit($bill, $k, $b) {
    unset($bill[$k]);
    $total = array_sum($bill)/2;
    $payable = ($b - $total);
    if($payable == 0){
        $payable = "Bon Appetit";
    }
    echo $payable;
}


$bill = [3, 10, 2, 9];
$k = 1;
$b = 12;

echo bonAppetit($bill, $k, $b);

?>