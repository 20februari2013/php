<?php
if ( isset($_POST['username']) ) {
	if ($_POST['username']=='admin' && $_POST['password']=='123') {
		header('location:admin.php');
	}
	else {
		$error=true;
	}
}
?>

<!doctype html>
<html>
<head>
<title>
Silakan login
</title>
</head>
<style>
button{
	margin-left:9.5%;
}
p{
	color:red;
	font-style:italic;
}
</style>
<body>
<h1> Login Admin </h1>

<?php if (isset($error)): ?>
	<p> username / password salah ! </p>
<?php endif ?>

<form method=post>
	<label for=username> username </label>
	<input name=username id=username> </input> <br> <br>

	<label for=password> password </label>
	<input type=password name=password id=password> </input> <br> <br>

	<button type=submit name=submit> masho0k paK ekO </button>
</form
</body>
</html>
