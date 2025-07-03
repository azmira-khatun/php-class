
<?php
// This function searches for all the occurrences of string pattern against the string. This function is very useful for search and replace.

//  preg_match_all( $pattern, $input, $matches, $flags, $offset )

$s ="The Rain in SPAIN Fall Minly on the Plains";
$p ="/in/i";

echo preg_match_all($p,$s);
?>
