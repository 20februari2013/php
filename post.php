<html>
<head>
<title> post </title>
</head>
<body>

<?php if ( isset($_POST['submit']) ):?>
	<h1> Selamet Dateng <?=$_POST['nama']?> </h1>
<?php endif ?>

<form action='' method=post>
	Nama : <input type=text style=height:40px;width:200px name=nama> </input>
	<button type=submit name=submit style=color:blue> Kirim </button>
	<br> masukan
</form>
</body>
</html>
