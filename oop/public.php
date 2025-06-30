<?php



class Test {
    public $name = "This Is";

    public function showName() {
        echo $this->name;
    }
}

$obj = new Test();
echo $obj->name; // ✅ Accessible
echo "<br>";


$obj->showName(); // ✅ Accessible
?>