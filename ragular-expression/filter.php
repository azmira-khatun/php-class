
<?php
// preg_filter() work like preg_replace(), but it returns only the elements where replacements happened.
// preg_filter() removes elements where no matches are found.
// The preg_filter() function returns a string or array of strings in which matches of the pattern have been replaced with the replacement string.
$in =[
    'KHLIFA is My Favourit Book',
    'MISSION IMPOSSIBLE is My Favourit Movie',
    'GAME OF THRONES is My Favourit Show',
];
$r = preg_filter('/\b(\w+)\b/', '($1)', $in);
print_r($r);
?>
