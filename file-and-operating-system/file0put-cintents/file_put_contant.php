<?php
// file_put_contents(filename,data,mode,context)
echo file_put_contents("store.txt","hello");

echo "<br>";
// explode() function
// explode(separator,string,limit)
$data="This is my new class";
echo $data;
echo "<br>";
echo "<br>";

print_r(explode(" ",$data,2));

?>