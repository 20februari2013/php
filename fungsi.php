<?php
$konek=mysqli_connect('localhost','root','','phpdasar');

function query($query) {
	global $konek;
	$hasil=mysqli_query($konek, $query);
	$rows=[];
	while ( $row=mysqli_fetch_assoc($hasil) ) {
		$rows[]=$row;
	}
	return $rows;
}

function upload() {
	$namaFile=$_FILES["gambar"]["name"];
	$error=$_FILES['gambar']['error'];

	$ekstensiGambarValid=['jpg','jpeg','png'];
	$ekstensiGambar=explode('.', $namaFile);
	$ekstensiGambar=strtolower(end($ekstensiGambar));
	if (!in_array($ekstensiGambar, $ekstensiGambarValid)) {
		echo "
			<script>
				alert('yang anda upload bukan file gambar')
				window.location.href='index.php'
			</script>
		";
		exit;
	}

	return $namaFile;
}

function tambah() {
	global $konek;
	$nrp=htmlspecialchars($_POST['nrp']);
	$nama=htmlspecialchars($_POST['nama']);
	$email=htmlspecialchars($_POST['email']);
	$jurusan=htmlspecialchars($_POST['jurusan']);
	$gambar=upload();

	$query="insert into mahasiswa values(null, '$nama', '$nrp', '$email', '$jurusan', '$gambar')";
	mysqli_query($konek, $query);

	if ( mysqli_affected_rows($konek) > 0 ) {
		echo "
			<script>
				alert('data berhasil ditambahkan.')
				window.location.href='index.php'
			</script>
		";
	} else {
		echo 'Tambah data gagal' . '<br>' . mysqli_error($konek);
	}
}


function hapus($id) {
	global $konek;
	mysqli_query($konek, "delete from mahasiswa where id=$id");
	if ( mysqli_affected_rows($konek) > 0 ) {
		echo "
			<script>
				alert('data berhasil dihapuskan.')
				window.location.href='index.php'
			</script>
		";
	} else {
		echo "
			<script>
				alert('data gagal dihapuskan.')
				window.location.href='index.php'
			</script>
		";
	}
}


function ubah($data) {
	global $konek;
	$id=$data['id'];
	$nrp=htmlspecialchars($data['nrp']);
	$nama=htmlspecialchars($data['nama']);
	$email=htmlspecialchars($data['email']);
	$jurusan=htmlspecialchars($data['jurusan']);
	$gambar=htmlspecialchars($data['gambar']);

	$query="update mahasiswa set
				nrp='$nrp',
				nama='$nama',
				email='$email',
				jurusan='$jurusan',
				gambar='$gambar'
				where id=$id
			";
	mysqli_query($konek, $query);

	if ( mysqli_affected_rows($konek) > 0 ) {
		echo "
			<script>
				alert('data berhasil diubah.')
				window.location.href='index.php'
			</script>
		";
	} else {
		echo 'Ubah data gagal' . '<br>' . mysqli_error($konek);
	}
}


function cari($keyword) {
	$query="select*from mahasiswa
			where nama like '%$keyword%' or
			nrp like '%$keyword%' or
			email like '%$keyword%' or
			jurusan like '%$keyword%'";

	return query($query);
}




?>
