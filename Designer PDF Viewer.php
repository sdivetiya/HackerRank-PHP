<?php
/*
QUESTION:
When a contiguous block of text is selected in a PDF viewer, the selection is highlighted with a blue rectangle. In this PDF viewer, each word is highlighted independently. For example:



There is a list of 26 character heights aligned by index to their letters. For example, 'a' is at index 0 and 'z' is at index 25. There will also be a string. Using the letter heights given, determine the area of the rectangle highlight in  assuming all letters are 1mm wide.

*/

// Solution
function designerPdfViewer($h, $word) {
    $alpha = ['a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z'];
    $out = [];
    $chars = str_split($word);
    $totalChar = count($chars);
    foreach ($chars as $char) {
        if($key = array_search($char, $alpha)){
            array_push($out, $h[$key]);
        }
    }
    return max($out)*$totalChar;
}

$h = [1, 3, 1, 3, 1, 4, 1, 3, 2, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5, 5];
$word = 'abc';

echo designerPdfViewer($h, $word);

?>