<?php
require 'fungsi.php';

if ( isset($_POST['nrp']) ) {
	tambah();
}
?>

<!doctype html>
<html>
<head>
<style>
button{
	color:green;
	font-size:100%;
}
a{
	display:inline-block;
	text-decoration:none;
	background:lightgrey;
	border:solid 1px black;
	border-radius:3px;
	width:128.5px;
	text-align:center;
	padding:2.5px;
	font-size:105%;
}
</style>
</head>
<body>
<h1> Tambah data mahasiswa </h1>
<form method=post enctype="multipart/form-data">
	<table>
		<tr>
			<td>
				<label for=nama> Nama </label>
			</td>
			<td>
				<input name=nama id=nama required value='John Wick'> 
			</td>
		</tr>
		<tr>
			<td>
				<label for=nrp> NRP </label>
			</td>
			<td>
				<input name=nrp id=nrp required value=8846049>
			</td>
		</tr>
		<tr>
			<td>
				<label for=email> Email </label>
			</td>
			<td>
				<input name=email id=email required value=hasna@admin.com>
			</td>
		</tr>
		<tr>
			<td>
				<label for=jurusan> Jurusan </label>
			</td>
			<td>
				<input name=jurusan id=jurusan value=otomotif>
			</td>
		</tr>
		<tr>
			<td>
				<label for=gambar> Gambar </label>
			</td>
			<td>
				<input type=file name=gambar id=gambar required>
			</td>
		</tr>
		</tr>
			<td> </td>
			<td align=right>
				<button type=submit name=submit> Tambah Data </button>
			</td>
		</tr>
		<tr>
			<td> </td>
			<td align=right>
				<a href=index.php>index</a>
			</td>
		</tr>
	</table>
</form>
</body>
</html>
