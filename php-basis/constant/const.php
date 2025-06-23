<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Constatnt</title>
</head>
<body>
    <h1>Constatnt</h1>
    <!-- Constants can be defined using the const keyword, or by using the define()-function.   -->


   <?php

    // define(name, value)
    define("GREET", "HELLO WORLD");
    echo GREET;
    
    ?>
    

    <h4>Defining Constants using the const keyword</h4>
    <?php
    const CONSTANT ="HELLO WORLD!!!";
    echo CONSTANT;
    ?>
    

    <h4>Constant arrays</h4>

    <?php
    define("ANIMALS",array(
        "dog",
        "cat",
        "bird"
    ));
    echo ANIMALS[1];
    
    ?>

</body>
</html>