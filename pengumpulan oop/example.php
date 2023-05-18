<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <p style="font-size: 30px; font-family:sans-serif;">Sistem demo parkir</p>
<?php
$vehicle = "";
    $parking    = '';

    if($_SERVER ["REQUEST_METHOD"]=== "POST" ){
        $vehicle = dataType($_POST['vehicle']);
        $parking = dataType($_POST['parking']);
    }
        function dataType($maxparking)
        {
            $inputData = trim($maxparking);
            $inputData = stripslashes($maxparking);
            $inputData = htmlspecialchars($maxparking);
            return $inputData;
        }
    ?>
   <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <div style="margin-bottom: 3px;">
        <label for="username">nama kendaraan</label>
        <input type="text" id="vehicle" name="vehicle" placeholder="Masukan nama kendaraan anda"/>
    </div>
    <div style="margin-bottom: 3px;">
        <label for="username">plat nomor</label>
        <input type="text" id="username" name="parking" placeholder="Masukan kelas plat nomor "/>
    </div>
    <input type="submit" value="Simpan">
    </form>

    <?php
    echo "<br>";
    echo "nama kendaraan  " . $vehicle;
    echo "<br>";
    echo "plat nomor ". $parking;

    ?>
</body>
</html>



