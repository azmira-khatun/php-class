
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Indexed Arrays</title>
</head>
<body>
    <h4>Indexed Arrays</h4>
    <?php
    $fruits = array("Apple","Banana","Cherry");
    echo $fruits[2];
    echo"<br>";
    ?>
     <?php
    $fruits = array(0=>"Apple",1=>"Banana",2=>"Cherry");
    print_r($fruits);
    echo"<br>";
    ?>

    <?php
    $fruits = array(0=>"Apple",1=>"Banana",2=>"Cherry");

    // Using a foreach loop (most common for arrays)
    foreach ($fruits as $fruit) {
        echo $fruit . "<br>"; // Adds a line break after each fruit
    }

    echo "<br>";

    // Using a for loop (if you need the index)
    for ($i = 0; $i < count($fruits); $i++) {
        echo "Fruit at index " . $i . ": " . $fruits[$i] . "<br>";
    }
    ?>
</body>
</html>
