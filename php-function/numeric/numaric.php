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
    
  
    

    <h1>range function</h1>
    <!-- array range(low, high, step) -->
    <?php
    $N =range(0,8);
    var_dump($N);
    echo "<br>";
    echo "<br>";

    foreach ($N as $M){
        echo ("$M" .",");
    }
    ?>

<?php
    $S =range(0,38,4); //step respectively so it returns an array with 
    // elements starting from 0 to 38 incremented by 3
   
    echo "<br>";
    echo "<br>";

    foreach ($S as $T){
        echo ("$T" .",");
    }
    ?> 

?>