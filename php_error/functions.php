<?php
$connect=mysqli_connect('localhost','nengkya','kyakyakya','phpdasar');

function query($query){
    global $connect;
    $result=mysqli_query($connect,$query);
    $rows=[];
    while ($row=mysqli_fetch_assoc($result)){
        $rows[]=$row;
    }
    return $rows;
}

function tambah($data){
    global $connect;
        print_r($data);
        $nama=$data["nama"];
        $nrp=$data['nrp'];
        $email=$data['email'];
        $jurusan=$data['jurusan'];
        $gambar=$data['gambar'];
        tambah("insert into mahasiswa(nama,nrp,email,jurusan,gambar)
                values('$_POST[nama]','$nrp','$email','$jurusan', '$gambar')");

    mysqli_query($connect,$query);
    return mysqli_affected_rows($connect);
}

function ubah($query){
    global $connect;
    mysqli_query($connect,$query);
}

?>