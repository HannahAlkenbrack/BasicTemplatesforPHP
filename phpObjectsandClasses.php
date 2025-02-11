<?php
// Defining a Class
class Car {
    public $brand;
    public $color;

    public function __construct($brand, $color) {
        $this->brand = $brand;
        $this->color = $color;
    }

    public function drive() {
        echo "Driving a $this->color $this->brand!";
    }
}

// Creating an Object
$myCar = new Car("Tesla", "Red");
$myCar->drive(); // Outputs: Driving a Red Tesla!
?>
