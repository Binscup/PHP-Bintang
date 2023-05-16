<?php

class Rectangle {
    
    protected $length;
    protected $width;
    
    public function __construct($length, $width) {
        $this->length = $length;
        $this->width = $width;
    }
    
    public function calculateArea() {
        return $this->length * $this->width;
    }

}

?>
<?php

$rectangle1 = new Rectangle(5, 8);
echo $rectangle1->calculateArea();

?>
