
<?php
// The preg_grep() function filters elements of an array using a regular expression (pattern matching).
// preg_grep(string $pattern, array $array, int $flags = 0): array


$items = ["apple", "banana", "grape", "orange", "pineapple"];

$result = preg_grep("/apple/", $items);

print_r($result);

?>
