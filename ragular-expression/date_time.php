
<?php

date_default_timezone_set("Asia/Dhaka");

echo date("d/m/y h:i:s A");

echo "<br>";

$timestamp= mktime(11,53,0,7,04,2025);

echo date("d M Y h:i:s A",$timestamp);

echo "<br>";

echo checkdate(7,04,2025);
?>
