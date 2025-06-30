<?php

final class Car {
    public function run() {
        echo "Car is running\n";
    }
}
// Car class কে extend করার চেষ্টা করলে PHP fatal error দিবে।


// ❌ Error: Cannot extend final class Car
// class Toyota extends Car {
// }




?>