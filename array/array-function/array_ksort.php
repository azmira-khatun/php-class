<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array ksort</title>
</head>
<body>
    <h3>array ksort</h3>
    <!--  Sorts an associative array by its keys in ascending order. -->
      <?php
      $person = ["name" => "GFG", "age" => 30, "city" => "India"];
        ksort($person);
        print_r($person);
      ?>
</body>
</html>