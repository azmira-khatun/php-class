<?php
$password="admin";
$m=sha1($password);
echo $m;
echo "<br>";
echo strlen ($m);


?>