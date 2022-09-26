<?php
/*
QUESTION: 

A person wants to determine the most expensive computer keyboard and USB drive that can be purchased with a give budget. Given price lists for keyboards and USB drives and a budget, find the cost to buy them. If it is not possible to buy both items, return -1.

Example
b = 60
keyboards = [40, 50, 60]
drives = [5, 8, 12]

The person can buy a 40 keyboards + 12 USB drive = 52, or a 50 keyboards + 8 USB drive = 58. Choose the latter as the more expensive option and return 58.

Function Description
Complete the getMoneySpent function in the editor below.

getMoneySpent has the following parameter(s):
- int keyboards[n]: the keyboard prices
- int drives[m]: the drive prices
- int b: the budget

Returns
- int: the maximum that can be spent, or  if it is not possible to buy both items
*/

// Solution
function getMoneySpent($keyboards, $drives, $b) {
    /*
     * Write your code here.
     */
    $tempApp = [];
    for($i = 0; $i < count($keyboards); $i++){
        for($j = 0; $j < count($drives); $j++){
            $total = $keyboards[$i] + $drives[$j];
            if($total <= $b){
                array_push($tempApp, $total);
            }
        }
    }
    return (!empty($tempApp)) ? max($tempApp) : -1;
}

$keyboards = [40, 50, 60];
$drives = [5, 8, 12];
$b = 60;

echo getMoneySpent($keyboards, $drives, $b);

?>