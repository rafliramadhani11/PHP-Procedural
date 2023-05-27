<?php

$hostname = 'localhost';
$username = 'root';
$password = '';
$db = 'phpprocedural';

$conn = mysqli_connect($hostname, $username, $password, $db);

function query($query)
{
    global $conn;
    $result = mysqli_query($conn, $query);
    $obj = [];

    while ($row = mysqli_fetch_assoc($result)) {
        $obj[] = $row;
    }
    return $result;
}

function tambah($data)
{
    global $conn;


    $namaBarang = $data['namaBarang'];
    $stokBarang = $data['stokBarang'];

    $query = "INSERT INTO barang VALUES
                ('', '$namaBarang', '$stokBarang')";

    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function hapus($id)
{
    global $conn;
    $query = "DELETE FROM barang WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}

function ubah($data)
{
    global $conn;
    $id = $data['id'];
    $namaBarang = $data['namaBarang'];
    $stokBarang = $data['stokBarang'];

    $query = "UPDATE barang SET
                id='$id',
                namabarang='$namaBarang',
                stokbarang='$stokBarang'
                WHERE id = $id";
    mysqli_query($conn, $query);

    return mysqli_affected_rows($conn);
}
