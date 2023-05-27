<?php
require 'functions.php';

$id = $_GET['id'];
$barang = query("SELECT * FROM barang WHERE id = $id");

if (isset($_POST['submit'])) {
    if (ubah($_POST) > 0) {
        header("Location: index.php");
        exit();
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ubah Data</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        body {
            width: 100vw;
            height: 100vh;
        }

        #form-tambah {
            width: 30%;
            height: 80%;
        }
    </style>
</head>

<body class="container d-flex justify-content-center align-items-center">
    <div class="container  w-50 h-75 rounded">
        <h3 class="mb-4">Halaman Ubah Data </h3>

        <form method="post">
            <?php foreach ($barang as $brg) : ?>
                <input type="hidden" name="id" value="<?= $brg['id'] ?>">
                <div class="form-floating mb-3">
                    <input type="text" class="form-control" id="floatingInput" name="namaBarang" value="<?= $brg['namabarang'] ?>">
                    <label for="floatingInput">Nama Barang</label>
                </div>
                <div class="form-floating mb-3">
                    <input type="number" class="form-control" id="floatingInput" name="stokBarang" value="<?= $brg['stokbarang'] ?>">
                    <label for="floatingInput">Stok Barang</label>
                </div>
                <button class="btn btn-success" type="submit" name="submit">Submit</button>
                <a href="index.php" class="btn btn-danger">Kembali</a>
            <?php endforeach; ?>
        </form>
    </div>
</body>

</html>