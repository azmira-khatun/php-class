<?php

class MyClass {
    private $secret = "Top Secret";

    private function showSecret() {
        echo $this->secret;
    }

    public function accessSecret() {
        $this->showSecret(); // ✅ OK
    }
}

$obj = new MyClass();
$obj->accessSecret(); // ✅ OK
// echo $obj->secret; ❌ Error
// $obj->showSecret(); ❌ Error



?>