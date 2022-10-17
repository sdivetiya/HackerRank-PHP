<?php

/*

PROBLEM:

Your local library needs your help! Given the expected and actual return dates for a library book, create a program that calculates the fine (if any). The fee structure is as follows:

1. If the book is returned on or before the expected return date, no fine will be charged (i.e.: fine = 0).

2. if the book is returned after the expected return day but still within the same calendar month and year as the expected return date, fine = 15 Hackos x (the number of days late).

3. If the book is returned after the expected return month but still within the same calendar year as tne expected return date, the fine = 500 Hackos x (the number of months late).

4. If the book is returned after the calendar year in which it was expected, there is a fixed fine of 10000 Hackos.

Charges are based only on the least precise measure of lateness. For example, whether a book is due January 1, 2017 or December 31, 2017, if it is returned January 1, 2018, that is a year late and the fine would be 10, 000 Hlackos.

Example
d1, m1, y1 = 14, 7, 2018
d2, m2, m2 = 5,7, 2018
The first values are the return date and the second are the due date. The years are the same and the months are the same. The book is 14 - 5 = 9 days late. Return 9 * 15 = 135.

*/

// Solution
function libraryFine($d1, $m1, $y1, $d2, $m2, $y2) {
    // Write your code here
    $year = false;
    // Check year
    if($y1 > $y2){
        return ($y1-$y2)*10000;
    }
    else if($m1 > $m2 && $y1 == $y2){
        return ($m1-$m2)* 500;
    }
    else if($d1 > $d2 && $m1 == $m2 && $y1 == $y2){
        return ($d1-$d2)*15;
    }
    else{
        return 0;
    }
    // Check Month
    
    // Check Day
}

echo libraryFine(14, 7, 2018, 5, 7, 2018);

?>