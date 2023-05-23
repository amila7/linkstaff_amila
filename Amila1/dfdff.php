<?php
// Order of replacement
$str     = "Line 1\nLine 2\rLine 3\r\nLine 4\n";
$order   = array("\r\n", "\n", "\r");
$replace = '<br />';

// Processes \r\n's first so they aren't converted twice.
$newstr = str_replace($order, $replace, $str);

// Outputs F because A is replaced with B, then B is replaced with C, and so on...
// Finally E is replaced with F, because of left to right replacements.
$search  = array('A', 'B', 'C', 'D', 'E');
$replace = array('B', 'C', 'D', 'E', 'F');
$subject = 'A';
echo str_replace($search, $replace, $subject);

// Outputs: apearpearle pear
// For the same reason mentioned above
$letters = array('a', 'p');
$fruit   = array('apple', 'pear');
$text    = 'a p';
$output  = str_replace($letters, $fruit, $text);
echo $output;
?>

