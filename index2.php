<?php
$konek=mysqli_connect('localhost','root','','phpdasar');

$query=mysqli_query($konek,'select * from mahasiswa');

?>

<html>
<head>
	<title> Belajar PHP MySQL </title>
</head>
<body>
	<h1> Daftar Mahasiswa </h1>	
	<table border=1 cellpadding=10 cellspacing=0>
		<tr>
			<th> No. </th>
			<td> Aksi </td>
			<td> Gambar </td>
			<td> NRP </td>
			<td> Nama </td>
			<td> Email </td>
			<td> Jurusan </td>
		</tr>
		<?php $i=1?>
		<?php while($row=mysqli_fetch_assoc($query)): ?>
		<tr>
			<td> <?php echo $i?> </td>
			<td> <a href>Ubah</a> | <a href>Apus</a> </td>
			<td> <img src='<?=$row['gambar'] ?>' width=50> </td>
			<td> <?=$row['nrp'];?> </td>
			<td> <?=$row['Nama']?> </td>
			<td> <?=$row['email']?> </td>
			<td> <?=$row['jurusan']?> </td>
		</tr>
		<?php $i++ ?>
		<?php endwhile ?>
	</table>

</body>
</html>
