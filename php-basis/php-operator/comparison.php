<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Comparison Operators</title>
</head>
<body>
    <h1>Comparison Operators</h1>
    <?php
    var_dump(0=="a");
    var_dump("1"=="01");
    var_dump("10"=="1e1");
    var_dump(100=="1e1");

    switch("a"){
        case 0:
            echo"0";
            break;
        case"a":
            echo"a";
            break;
    }
    ?>

    <h4>Comparison Operators</h4>
    <?php
// Integers
echo 1 <=> 1, ' '; // 0
echo 1 <=> 2, ' '; // -1
echo 2 <=> 1, ' '; // 1

// Floats
echo 1.5 <=> 1.5, ' '; // 0
echo 1.5 <=> 2.5, ' '; // -1
echo 2.5 <=> 1.5, ' '; // 1

// Strings
echo "a" <=> "a", ' '; // 0
echo "a" <=> "b", ' '; // -1
echo "b" <=> "a", ' '; // 1

echo "a" <=> "aa", ' ';  // -1
echo "zz" <=> "aa", ' '; // 1

// Arrays
echo [] <=> [], ' ';               // 0
echo [1, 2, 3] <=> [1, 2, 3], ' '; // 0
echo [1, 2, 3] <=> [], ' ';        // 1
echo [1, 2, 3] <=> [1, 2, 1], ' '; // 1
echo [1, 2, 3] <=> [1, 2, 4], ' '; // -1

// Objects
$a = (object) ["a" => "b"];
$b = (object) ["a" => "b"];
echo $a <=> $b, ' '; // 0

$a = (object) ["a" => "b"];
$b = (object) ["a" => "c"];
echo $a <=> $b, ' '; // -1

$a = (object) ["a" => "c"];
$b = (object) ["a" => "b"];
echo $a <=> $b, ' '; // 1

// not only values are compared; keys must match
$a = (object) ["a" => "b"];
$b = (object) ["b" => "b"];
echo $a <=> $b, ' '; // 1

?>
</body>
</html>