<?php 
$cars = array (
  array("Volvo",22,18),
  array("BMW",15,13),
  array("Saab",5,2),
  array("Land Rover",17,15)
);
echo $cars[3][2];
echo "<br>";
echo $cars[2][1];
echo "<br>";
echo $cars[1][0];
echo "<br>";

echo $cars[1][1];
echo "<br>";
print_r($cars);
echo "<br>";


for ($row = 0; $row < 4; $row++) {
  echo "<p><b>Row number $row</b></p>";
  echo "<ul>";
    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
  echo "</ul>";
}



for($i=0 ;$i<3; $i++){
echo "<p><b> Title $i</b></p>";
for($k=0; $k<3; $k++){
    echo $cars[$i][$k]."<br>";
}

}




for ($row = 0; $row < 3; $row++) {

    for ($col = 0; $col < 3; $col++) {
      echo "<li>".$cars[$row][$col]."</li>";
    }
  echo "</ul>";
}




// create three nested array


$arr=array(
    array(
        array(1,3),
        array(3,4),
    ), 
    array(
        array(5,6),
        array(7,8),
    ),
);
// display the array information
print_r($arr);










echo"<br>";
for($i=0;$i<3; $i++){
    echo" <p><h2>Title $i</h2></p>";
    for($k=0; $k<3; $k++){
        echo" <p><h2> Sub-Title $k</h2></p>";
    }

}










?>