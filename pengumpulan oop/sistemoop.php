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
    <?php 
     echo"<br>";
     echo"nama kendaraan";
     echo"<br>";
     echo"nomor plat";
    ?>
    </form>
    </body>
    </html>
    
