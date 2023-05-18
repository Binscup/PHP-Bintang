<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="font-size: 30px;">Sistem demo karcis parkir</p>
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
if($_SERVER ["REQUEST_METHOD"]=== "POST" ){
    $numberPolice = dataType($_POST['numberPolice']);
    $parking = dataType($_POST['parking']);
}
    function dataType($dataparkir)
    {
        $inputData = trim($dataparkir);
        $inputData = stripslashes($dataparkir);
        $inputData = htmlspecialchars($dataparkir);
        return $inputData;
    }

?>
 <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div style="margin-bottom: 3px;">
        <label for="username">nama kendaraan</label>
        <input type="text" id="username" name="numberPolice" placeholder="Masukan nama anda"/>
    </div>
    <div style="margin-bottom: 3px;">
        <label for="username">plat nomor</label>
        <input type="text" id="username" name="parking" placeholder="Masukan kelas anda"/>
    </div>
    <div style="margin-bottom: 3px;">
        <label for="username">nomor polisi</label>
        <input type="text" id="username" name="numberPolice" placeholder="Masukan nama anda"/>
    </div>
    <div style="margin-bottom: 3px;">
        <label for="username">total jumlah kendaraan</label>
        <input type="number" id="username" name="parking" placeholder="Masukan kelas anda"/>
    </div>
    <input type="submit" value="Simpan">

    </form>
    <?php 
    echo"<br>";
    echo"tipe kendaraan". $numberPolice;
    ?>


</body>
</html>