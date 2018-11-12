<?php

if ( !isset($_GET['nama']) ||
	 !isset($_GET['nrp']) or
	 !isset($_GET['gambar']) ) {
	header('location:get.php');
	exit;
}

?>

<html>
<head> </head>
<body>
	<ul>
		<li> <img src= <?=$_GET['gambar']?> > </li>
		<li> <?=$_GET['nama']?> </li>
		<li> <?=$_GET['nrp']?> </li>
		<li> <?=$_GET['email']?> </li>
		<li> <?=$_GET['jurusan']?> </li>
	</ul>
	<a href='get.php'>Kembali ke daftar mahasiswa</a>
</body>
</html>
