<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logic operators</title>
</head>
<body>
    <h1>logic operators</h1>
    <?php
    $a = false && true;
    $b = false || true;
    $c = true and true;
    $d = true or true;
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    ?>
    <br>
     <?php
    $a =!( false xor true);
    $b = false xor true;
    $c = !(true xor true);
    $d = true xor true;
    var_dump($a);
    var_dump($b);
    var_dump($c);
    var_dump($d);
    ?>


</body>
</html>