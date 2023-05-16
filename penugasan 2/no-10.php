<?php

class Car {
    private $name="";
    private $sound="";

    public function __construct($name, $sound) {
        $this->name = $name;
        $this->sound = $sound;
    }

    public function setAnimal($name) {
        $this->name= $name;
    }

    public function getAnimal() {
        return $this->name;
    }

    public function setSound($sound) {
        $this->year = $sound;
    }

    public function getSound() {
        return $this->sound;
    }

    public function makesound() {
        return 'Name: ' . $this->name . "\nSound: " . $this->sound; 
    }
}

?>
<?php

$animal1 = new Car('Cat', 'Meow');
echo $animal1->makesound();
