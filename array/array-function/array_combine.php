
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array combine</title>
</head>
<body>
    <h3></h3>
    <!-- Create a new array by using one array for keys and another array for values. -->
     <?php
        // array_combine( $keys_array, $values_array )


$array1 = array("Ram", "Akash", "Rishav");
$array2 = array('24', '30', '45');

$result = array_combine($array1, $array2);

print_r($result);

?>
</body>
</html>
