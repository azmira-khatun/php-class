<?php
$myfile=fopen("first.txt","r")or die("Unable to open file!");
echo fread($myfile,filesize("first.txt"));
fclose($myfile);




?>