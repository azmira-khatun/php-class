<?php
class Car
{
    // Property
    public $color;

    // Constructor
    function __construct($color)
    {
        $this->color = $color;
    }

    // Method
    function drive()
    {
        echo "The $this->color car is driving";
    }
}

// Object creation
$car1 = new Car("Red");
$car1->drive(); // Output: The Red car is driving
?>