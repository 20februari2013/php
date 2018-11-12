<?php
require 'fungsi.php';
$mahasiswa=query('select * from mahasiswa');

if ( isset($_POST['submit']) ) {
	$mahasiswa=cari($_POST['cari']);
}
?>

<!doctype html>
<html>
<head>
<title> Belajar PHP MySQL </title>
<style>
a {
	background:#12af98;
	margin:2px;
	padding:2px;
	text-decoration:none;
	border:solid #6709a3 1px;
}

button {
	font-size:14px;
}

body {
}
</style>
</head>
<body>
	<h1> Daftar Mahasiswa </h1>

	<a href=tambah.php>Tambah data mahasiswa</a> <br> <br>

	<form method=post>
		<input type=search autofocus size=40 name=cari placeholder='kata kunci' autocomplete=off>
		<button type=submit name=submit> Cari </button> <br> <br>
	</form>

	<table border=1 cellpadding=10 cellspacing=0>
		<tr>
			<th> No. </th>
			<td align=center> Aksi </td>
			<td> Gambar </td>
			<td> NRP </td>
			<td> Nama </td>
			<td> Email </td>
			<td> Jurusan </td>
		</tr>
		<?php $i=1?>
		<?php foreach ($mahasiswa as $row): ?>
		<tr>
			<td align=right> <?php echo $i?> </td>
			<td style=line-height:200%>
				<a href='ubah.php?id= <?=$row['id'] ?>'>Ubah</a>
				<a href='hapus.php?id= <?=$row['id'] ?>' onclick="return confirm('Anda yakin ingin menghapus data')">Apus</a>
			</td>
			<td> <img src=<?=$row['gambar'] ?> width=50> </td>
			<td> <?=$row['nrp'];?> </td>
			<td> <?=$row['Nama']?> </td>
			<td> <?=$row['email']?> </td>
			<td> <?=$row['jurusan']?> </td>
		</tr>
		<?php $i++ ?>
		<?php endforeach ?>
	</table>
<br>
</body>
</html>
