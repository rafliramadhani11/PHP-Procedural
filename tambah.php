<?php
require 'functions.php';

if (isset($_POST['submit'])) {
    if (tambah($_POST) > 0) {
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
    <title>Tambah Data</title>
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
        <h3 class="mb-4">Form Tambah Data</h3>

        <form method="post">

            <div class="form-floating mb-3">
                <input type="text" class="form-control" id="floatingInput" name="namaBarang">
                <label for="floatingInput">Nama Barang</label>
            </div>
            <div class="form-floating mb-3">
                <input type="number" class="form-control" id="floatingInput" name="stokBarang">
                <label for="floatingInput">Stok Barang</label>
            </div>
            <button class="btn btn-success" type="submit" name="submit">Submit</button>
            <button class="btn btn-danger">Kembali</button>
        </form>
    </div>
</body>

</html>