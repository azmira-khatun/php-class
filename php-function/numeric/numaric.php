<?php
// numaric [is_numeric(),round(),rand(mix,max);]


// numeric ata number ke na sata check kora.value ta number hola result true(1) hoba.r number na hola kesoi asba na
function num(){
echo is_numeric(12);

};
num();
echo "<br>";

function num2(){
echo ("Round: ".round(34.5545));

};
num2();
echo "<br>";

function anum2(){
    echo ("Random Number: ".rand(1000,9999));
    echo "<br>";
    echo ("Random Number: ".rand());
    };
    anum2();
    echo "<br>";
    
    

?>