<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
require 'functions.php';
/*
isset adalah untuk mengecek apakah data sudah diisi.
isset $_POST artinya apakah data sudah diisi pada metode form post.
isset $_POST['submit'] artinya apakah data pada metode form post di tombol name=submit sudah diisi.
*/
$connect=mysqli_connect('localhost','nengkya','kyakyakya','phpdasar'); 
if (isset($_POST["submit"])){
    if (tambah($_POST)){
        echo"
        <script>
            windows.alert('tambah data sukses !')
            document.href.redirect('index.php')
        </script>
        ";
    } else {
        echo"
        <script>
            windows.alert('tambah data gagal')
        </script>";
    }
}

?>
<title>Tambah data mahasiswa</title>
<h1>Tambah data mahasiswa</h1>

<!--//untuk input data dari page html ke server menggunakan form tag, metode get post-->
<form action='' method="post">
    <ol>
        <label for=nama>Nama : </label>
        <input name="nama" id=nama>
    </ol>
    <ol>
        <label for=nrp>NRP : </label>
        <input name=nrp id=nrp>
    </ol>
    <ol>
        <label for=email>Email : </label>
        <input name=email id=email>
    </ol>
    <ol>
        <label for=jurusan>Jurusan : </label>
        <input id=jurusan name=jurusan>
    </ol>
    <ol>
        <label for=gambar>Gambar : </label>
        <input id=gambar name=gambar>
        <h1></h1>
        <p></p>
    </ol>
    <ol>
        <button type=submit name="submit">Tambah data !</button>
    </ol>
</form>