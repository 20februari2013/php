<?php
$mahasiswa=[
		[
			'nrp'=>'29389423',
			'nama'=>'John Bullshit',
			'email'=>'fmewukhr@mguae.com',
			'jurusan'=>'gedung',
			'gambar'=>'patrick.jpg'
		],
		[
			'nrp'=>'98234',
			'nama'=>'SpongeBod',
			'email'=>'rewbur@jfkre.io',
			'jurusan'=>'palu',
			'gambar'=>'krab.jpeg'
		]		
	];
?>

<html>
<head>
	<h1> Daftar Mahasiswa </h1>
</head>
<body>
<title> Title di body </title>
<?php foreach ($mahasiswa as $mhs): ?>
<li>
	<a href='latihan2.php?gambar=<?=$mhs['gambar']?> &nama= <?=$mhs['nama']?> &nrp= <?=$mhs['nrp']?>
	&email= <?=$mhs['email']?> &jurusan=<?=$mhs['jurusan']?>' ><?=$mhs['nama']?></a>
</li>
<?php endforeach ?>
</body>
</html>
