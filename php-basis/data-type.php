<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data type</h1>
    <?php
    $n="Sharmin";
    echo $n ."<br>";
    var_dump($n);
    echo "<br>";

    // integer
    $num=300;
    var_dump($num);

    echo "<br>";
// float
    $f=300.987;
    var_dump($f);

    // boolean
    echo "<br>";

    $b=true;
    var_dump($b);

    // array
    echo "<br>";

    $a=array("a","b","c");
    var_dump($a);

    // object
    echo "<br>";

echo "<h2>This is object type</h2>";
    class Student{
         public $name;
        public $age;
        public function __construct($name,$age){
            $this->name = $name;
            $this->age = $age;
        }

    }
    $obj=new Student("Azmira","24");
    var_dump($obj)

    ?>
</body>
</html>