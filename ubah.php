<?php
require 'fungsi.php';

$id=$_GET['id'];

$mhs=query("select * from mahasiswa where id=$id")[0];

if ( isset($_POST['gambar']) ) ubah($_POST);

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
<h1> Ubah data mahasiswa </h1>
<form method=post>
	<table>
		<input type=hidden name=id value= <?=$id?> >
		<tr>
			<td>
				<label for=nama> Nama </label>
			</td>
			<td>
				<input name=nama id=nama required value= <?=$mhs['Nama']?> > 
			</td>
		</tr>
		<tr>
			<td>
				<label for=nrp> NRP </label>
			</td>
			<td>
				<input name=nrp id=nrp required value= <?=$mhs['nrp']?> >
			</td>
		</tr>
		<tr>
			<td>
				<label for=email> Email </label>
			</td>
			<td>
				<input name=email id=email required value= <?=$mhs['email']?> >
			</td>
		</tr>
		<tr>
			<td>
				<label for=jurusan> Jurusan </label>
			</td>
			<td>
				<input name=jurusan id=jurusan required value= <?=$mhs['jurusan']?> >
			</td>
		</tr>
		<tr>
			<td>
				<label for=gambar> Gambar </label>
			</td>
			<td>
				<input name=gambar id=gambar required value= <?=$mhs['gambar']?> >
			</td>
		</tr>
		</tr>
			<td> </td>
			<td align=right>
				<button type=submit name=submit> Ubah Data </button>
			</td>
		</tr>
		<tr>
			<td> </td>
			<td align=right>
				<a href=index.php>Batal</a>
			</td>
		</tr>
	</table>
</form>
</body>
</html>
