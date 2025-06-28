<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
// isset function  variable declared kora asa ke na ba null ke na sata check dai
$num=5; 
//   (ata variable declared koelm .result true hoba)

// $num =null;

if(isset($num)){
    $r=$num+15;
    var_dump($r);
    // echo $r;
}else{
    var_dump("False");
    // echo "False";
}
?>










// <h2 style="color:blue">The <u>isset() </u>function checks whether a variable is set, which means that it has to be declared and is not NULL. This function returns true if the variable exists and is not NULL, otherwise it returns false.</h2>




<?php  
$x ="xd";

if(isset($x)){ 
    // $x ="xd";

}else{ 
    echo "not done";
}
echo $x;
// $y = null;
// if(isset($y)){ 
//  echo "variable 'Y'";
// }


 

$num ="12";
var_dump(isset($num));

if(isset($num)){ //true
    $result = $num+4;
    echo $result;
}
var_dump(isset($num));
 echo "<br>";

// $n ="12";

if(!isset($p)){ //false
    $p =12;
    $rs = $p+4;
}

echo $rs;
?>







</body>
</html>