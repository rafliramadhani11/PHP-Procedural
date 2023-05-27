<?php
require 'functions.php';
$barang = query("SELECT * FROM barang");

?>

<DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Home | Dashboard</title>
        <link rel="stylesheet" href="css/bootstrap.css">

    </head>

    <body>
        <nav class="navbar navbar-expand-lg ">
            <div class="container">
                <a class="navbar-brand" href="index.php">Pt. Produk Sejahtera</a>
            </div>
        </nav>
        <div class="container mt-3 mb-3">
            <h1>Daftar Produk </h1>
        </div>
        <div class="container mb-3">
            <a href="tambah.php" class="btn btn-primary">Tambah Barang</a>
        </div>
        <div class="container">

            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nama Handphone</th>
                        <th scope="col">Stok Barang</th>
                        <th scope="col">Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $i = 1 ?>
                    <?php foreach ($barang as $brg) : ?>
                        <tr>
                            <th scope="row"><?= $i; ?></th>
                            <td><?= ucfirst($brg['namabarang']) ?></td>
                            <td><?= $brg['stokbarang'] ?></td>
                            <td>
                                <a href="hapus.php?id=<?= $brg['id'] ?>" class="badge text-bg-danger text-decoration-none">Hapus</a>
                                <a href="ubah.php?id=<?= $brg['id'] ?>" class="badge text-bg-success text-decoration-none">Ubah</a>
                            </td>
                        </tr>
                        <?php $i++ ?>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
        <!-- Script JS -->
        <script src="js/bootstrap.js"></script>
    </body>

    </html>