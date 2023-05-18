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
    $Vehicle = "";
    $Parking = '';

    if ($_SEVER["REQUEST_METHOD"]=== "POST"){
        $Vehicle = dataType($_POST['Vehicle']);
        $Parking = dataType($_POST['Parking']);
    }
    function datatype($maxParking)
    {
        $inputData = trim($maxParking);
        $inputData = stripslashes($maxParking);
        $inputData = htmlspecialchars($maxParking);
        return $maxParking;
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>"method="post">
    <div style="margin-bottom: 3px;">
        <label for="Vehicle">Nama kendaraan</label>
        <input type="text" id="Vehicle" name="Nama kendaraan" placeholder="Masukan nomor kednaraan">
</div>
    <div style="margin-bottom: 3px;">
        <label for="plat">Masukan Plat nomor</label>
        <input type="text" id="plat" name="Masukan plat nomor" placeholder="Masukan plat nomor">
</div>
<input type="submit" value="Simpan">
</form>
    <?php
    echo "<br>";
    echo "Nama kendaraan". $Vehicle;
    echo "<br>";
    echo "Nomor Plat". $Parking;
     
    ?>
</body>
</html>