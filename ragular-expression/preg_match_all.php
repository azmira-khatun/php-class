
<?php
// This function searches for all the occurrences of string pattern against the string. This function is very useful for search and replace.

//  preg_match_all( $pattern, $input, $matches, $flags, $offset )

$s ="The Rain in SPAIN Fall Minly on the Plains";
$p ="/in/i";

echo preg_match_all($p,$s);
echo "<br>";

preg_match_all("/[eh]/","The Rain in SPAIN Fall Minly on the Plains",$p);
print_r($p);
echo "<br>";


$text="This is matches elements";
$ptrn="/[^eh]/";
echo preg_match_all($ptrn,$text);
echo "<br>";


$text="This is matches elements";

$ptrn="/[a-o]/";
echo preg_match_all($ptrn,$text);

echo "<br>";


$text="This is matches elements is 23265748";
$ptrn="/[2-7]/";
echo preg_match_all($ptrn,$text);

echo "<br>";
$text="This is matches elements is or this element";
$ptrn="/is|this|or/i";

echo "<br>";
// \s deya 2 ta word ar maj aj koyta gap asa sata count kora
$ptrn="/\s/i";
echo "<br>";
$ptrn="/\S/i";



echo preg_match_all($ptrn,$text);


?>
