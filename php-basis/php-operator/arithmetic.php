<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operators</title>
</head>
<body>
    <h1>Arithmetic Operators</h1>
    <?php
    $a = 3;
    $b = 4;
    // Identity
    echo +$a;
    echo "<br>";
    // Negation
    echo -$b;
    echo "<br>";
    ?>

    <h4>addition</h4>
    <?php
    $a = 3;
    $b = 4;
    echo $a+$b;
    echo "<br>";
   
    ?>

     <h4>subtraction</h4>
    <?php
    $a = 39;
    $b = 4;
    echo $a-$b;
    echo "<br>";
    ?>

     <h4>multiplication</h4>
    <?php
    $a = 3;
    $b = 4;
    echo $a*$b;
    echo "<br>";
    ?>

     <h4>division</h4>
    <?php
    $a = 32;
    $b = 4;
    echo $a/$b;
    echo "<br>";
    ?>

     <h4>modulo (Remainder)</h4>
     <!-- Remainder of $a divided by $b. -->
    <?php
    $a = 35;
    $b = 4;
    echo $a%$b;
    echo "<br>";
    ?>
     <h4>exponentiation</h4>
     <!-- Result of raising $a to the $b'th power. -->
    <?php
    $a = 3;
    $b = 3;
    echo $a**$b;
    echo "<br>";
    ?>
</body>
</html>