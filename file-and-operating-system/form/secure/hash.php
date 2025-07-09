

<?php
$password="admin";
$m=md5($password);
echo $m;
echo "<br>";
echo strlen ($m);


?>












<?php
$password="admin";
$m=hash('md5','this is admin');
echo $m;
echo "<br>";
echo strlen ($m);


?>