<?php 

require 'functions.php';


if (isset($_POST["register"]) ) {

	if (registrasi ($_POST) > 0 ) {

		echo "<script>
				alert ('user baru berhasil di tambahkan !');
			  </script>";
	} else {

		echo mysqli_error($conn);
	} 
}

?>


<!DOCTYPE html>
<html>
<head>
	<title>registrasi</title>
	<style>
		label {
			display: block;
		}
	</style>
</head>
<body>

	<form action="" method="post">
		<ul>
			<li>
				<label for="username">Username : </label>
				<input type="text" name="username" id="username">
			</li>
			<li>
				<label for="password">Password : </label>
				<input type="password" name="password" id="password">
			</li>
			<li>
				<label for="password2">Konfirmasi Password : </label>
				<input type="password" name="password2" id="password2">
			</li>
			<li>
				<button type="submit" name="register">buat akun</button>
			</li>
		</ul>

	</form>

</body>
</html>