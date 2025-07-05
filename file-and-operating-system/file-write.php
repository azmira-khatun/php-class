<?php
$myfile=fopen("first.txt", "w") or die("Unable to open file!");
$txt="this is my new file.\n";

fwrite($myfile,$txt);


$txt="this is my second new file.\n";
fwrite($myfile,$txt);


$txt="this is my third file.\n";
fwrite($myfile,$txt);

?>