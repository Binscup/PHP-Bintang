<?php

if (empty($_POST['username']) || empty($_POST['password'])) {
    $errors[] = "Masukan username anda.";
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
        <label for="username">Username:</label>
        <input type="text" name="username" id="username" class="form-control" value="<?php if (isset($_POST['username'])) echo $_POST['username']; ?>" required>
    </div>
    <div class="form-group">
        <label for="password">Password:</label>
        <input type="password" name="password" id="password" class="form-control" required>
    </div>
    <button type="submit" class="btn btn-primary" name="save">Save</button>
</form>
