<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>local variable</h1>
    <?php
    function info(){
        $a=12;
        echo $a;
    }
    info();
    ?>


<h1>global scope</h1>
<?php
$a=12;
$b=10;
function add(){
    global $a,$b,$c;
    $c=$a+$b;

}
add();
echo $c;


?>

    <h1>super global variable</h1>
    <?php
    echo $_SERVER['SERVER_NAME'];
    echo "<br>";
    echo $_SERVER['SERVER_PORT'];
    echo "<br>";
    echo $_SERVER['SCRIPT_FILENAME'];
    echo "<br>";

    
    ?>
</body>
</html>