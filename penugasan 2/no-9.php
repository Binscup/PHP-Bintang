<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
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

?>
<form action="" method="post">
        <div class="form-group">
            <label for="username">Nama kendaraan</label>
            <input type="text" name="username" id="username" class="form-control" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" required>
        </div>
        <div class="form-group">
            <label for="password">Plat nomor</label>
            <input type="text" name="password" id="password" class="form-control" required>
        </div>

        <button type="submit" class="btn btn-primary" name="save" style="padding: 10px; background-color:darkgoldenrod; color:aliceblue; border:none; border-radius:5px;">Save</button>
</body>
</html>

