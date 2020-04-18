<?php
require 'functions.php';
$mahasiswa=query('select*from mahasiswa');
?>

<title>Halaman Admin</title>
<h1>Daftar Mahasiswa</h1>
<a href=tambah.php>Tambah</a><br><br>
<table cellpadding=10 border=1 cellspacing=0>
<tr>
    <td>No</td><td>Aksi</td><td>Nama</td><td>NRP</td><td>Email</td><td>Jurusan</td><td>Gambar</td>
    <?php $i=1 ?>
    <?php foreach ($mahasiswa as $row): ?>
        <tr>
            <td><?=$i?></td>
            <td><a href=ubah.php>Ubah</a> | <a href=>Apus</a>
            <td><?=$row['nama']?></td>
            <td><?=$row['nrp']?></td>
            <td><?=$row['email']?></td>
            <td><?=$row['jurusan']?></td>
            <td><?=$row['gambar']?></td>
        </tr>
        <?php $i+=1 ?>
    <?php endforeach ?>
</tr>
</table>