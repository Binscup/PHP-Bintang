<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="font-size: 40px; font-family:sans-serif; ">Sitem karcis kendaraan</p>

    <?php 

    if (empty($_POST['username']) || empty($_POST['password'])) {
        $errors[] = "Masukan karcis parkir anda.";
    }
    
    if (count($_POST) == 1) {
        $errors[] = "Forum harus di isikan tidak boleh kosong.";
    }
    
    if (count($errors) > 0) {
        echo '<div class="alert alert-danger">' . implode('</div></div><div class="alert alert-danger">', $errors) . '</div>';
    } else {
    }
    
    
    ?>
    <?php

class vehicle
{
    private $numberPolice;
    private $type;

    public function __construct($numberPolice, $type)
    {
        $this->numberPolice = $numberPolice;
        $this->type = $type;
    }

    public function getNumberPolice()
    {
        return $this->numberPolice;
    }

    public function getType()
    {
        return $this->type;
    }
}

class parking
{
    private $maxParking;
    private $showVehicleParking;

    public function __construct($maxParking)
    {
        $this->maxParking = $maxParking;
        $this->showVehicleParking = array();
    }

    public function inParking(vehicle $vehicle)
    {
        if (count($this->showVehicleParking) < $this->maxParking) {
            $this->showVehicleParking[] = $vehicle;
            echo "Nomor polisi " . $vehicle->getNumberPolice() . " tipe kendaraan: " . $vehicle->getType();
        } else {
            echo "Area parkir sudah penuh, tunggu hingga kendaraan keluar";
        }
    }

    public function areaParking()
    {
        foreach ($this->maxParking as $key => $parking) {
            if ($parking->getNumberPolice === $parking) {
                unset($this->showVehicleParking[$key]);
                echo "Kendaraan berada pada area parkir";
                return;
            }
        }
    }

    public function statusParking()
    {
        echo "Berikut status parkir:" . "<br>";
        echo "Total jumlah parkir kendaraan: " . count($this->maxParking) . "<br>";
        foreach ($this->showVehicleParking as $key => $showVehicle) {
            echo "Nomor polisi " . $showVehicle->getNumberPolice() . " tipe kendaraan: " . $showVehicle->getType();
            return;
        }
    }
}

$parking = new parking(2);

$vehicle = new vehicle("B 0001 ABC", "Mobil");
$parking->inParking($vehicle);
$vehicle2 = new vehicle("B 0002 ABC", "Motor");
$parking->inParking($vehicle2);
$vehicle3 = new vehicle("B 0003 ABC", "Mobil");
$parking->inParking($vehicle3);
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
        <button type="submit" class="btn btn-primary" name="save">Save</button>
    </form>
    </body>
    </html>
    
