<?php
require 'functions.php';

// ambil id dari URL
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$m = query("SELECT * FROM mahasiswa WHERE id = $id");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <h3>detail Mahasiswa</h3>
    <ul>
        <li><img src="img/<?= $m['gambar'];?>"></li>
        <li>nrp : <?= $m['nrp'];?>"></li>
        <li>nama : <?= $m['nama'];?>"></li>
        <li>email :<?= $m['email'];?>"></li>
        <li>jurusan : <?= $m['jurusan'];?>"></li>
        <li><a href="">ubah</a>|<a href="">hapus</a></li>
        <li><a href="latihan3.php">kembali ke daftar Mahasiswa</a> </li>
    </ul>
</body>
</html>