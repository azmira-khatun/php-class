<?php

class ParentClass {
    protected $name = "Protected Name";

    protected function showName() {
        echo $this->name;
    }
}

class ChildClass extends ParentClass {
    public function accessProtected() {
        $this->showName(); // ✅ Allowed
    }
}

$obj = new ChildClass();
$obj->accessProtected(); // ✅ OK
// echo $obj->name; ❌ Error
// $obj->showName(); ❌ Error




?>