<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Associative Arrays</title>
</head>
<body>
    <h4>Associative Arrays</h4>

        <?php
        $person = array("name" => "GCF", "age" => 30, "city" => "New York");
         echo $person["name"]; 
         echo "<br>";
         print_r( $person);
         echo "<br>";

        ?>

        <?php
        $assoc = array("x"=>51,"y"=>65,"z"=>75);
        foreach($assoc as $w=>$z){
            $assoc1[$w] = $z*2 ."<br>";
        }
        print_r( $assoc1);
        ?>
</body>
</html>