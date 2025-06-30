<?php
class Animal {
    public function makeSound() {
        echo "Animal makes sound\n";
    }
}

class Dog extends Animal {
    public function makeSound() {
        echo "Dog barks\n";
    }
}

$dog = new Dog();
$dog->makeSound(); // Output: Dog barks


?>