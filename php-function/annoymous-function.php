<?php

// ja function ar kno name nai taka annoymous function bola
$f=function(){
    echo "hi";
};
$f();

echo "<br>";

// normal function
// $v=function info(){
//     echo "hello bamgladesh";
// };
// info();




// annoymous function

$add=function($a,$b){
    return $a+$b;
};
echo $add(2,3);
echo "<br>";


// arrow function
$addArrow=fn($a,$b) =>$a+$b;
echo $addArrow(2,3);



echo "<br>";

$info=fn() =>"hello";
echo $info();
echo "<br>";


$add=fn($a,$b)=>  $a+$b;
   

echo $add(2,3);
echo "<br>";



?>