<?php

class Circle {
    
    protected $radius;
    
    public function __construct($radius) {
        $this->radius = $radius;
    }

    public function calculateArea() {
        return 3.14 * pow($this->radius, 2);
    }
}

?>
<?php

$circle1 = new Circle(10);
echo $circle1->calculateArea();

