 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> Assignments</title>
</head>
<body>
    <h4> Nested Assignments</h4>
    <?php
    $a=($b=5)+9;
    var_dump($a);
    ?>

    <h4>Combined Assignments</h4>
     <?php
    $a=9;
    $a+=4;
    $b = "What's";
    $b .= "up";
    var_dump($a, $b);
    ?>

    <h4>Assigning by reference</h4>
    <?php
    $a =5;
    $b =&$a;
    print"$a\n";
    print"$b\n";

     $a =10;
    print"$a\n";
    print"$b\n";
    
    ?>
</body>
</html>