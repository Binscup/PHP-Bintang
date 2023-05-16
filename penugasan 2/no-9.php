<?php

class Car {
    private $brand;
    private $year;

    public function __construct($brand, $year) {
        $this->brand = $brand;
        $this->year = $year;
    }

    public function setBrand($brand) {
        $this->brand = $brand;
    }

    public function getBrand() {
        return $this->brand;
    }

    public function setYear($year) {
        $this->year = $year;
    }

    public function getYear() {
        return $this->year;
    }

    public function getInfo() {
        return 'Brand: ' . $this->brand . "\nYear: " . $this->year;
    }
}

?>
<?php

$car1 = new Car('Toyota', 2020);
echo $car1->getInfo();
//Brand: Toyota Year: 2020
?>
