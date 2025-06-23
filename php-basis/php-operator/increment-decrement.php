<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Increment/decrement Operators</title>
</head>
<body>
    <h4>Pre-increment</h4>
    <?php
    $a =5;
    var_dump(++$a);
    var_dump($a);
    ?>

     <h4>Post-increment</h4>
    <?php
    $a =5;
    var_dump($a++);
    var_dump($a);
    ?>

     <h4>Pre-decrement</h4>
    <?php
    $a =5;
    var_dump(--$a);
    var_dump($a);
    ?>

     <h4>Post-increment</h4>
    <?php
    $a =5;
    var_dump($a--);
    var_dump($a);
    ?>
</body>
</html>