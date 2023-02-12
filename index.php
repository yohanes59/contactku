<?php
session_start();
require 'koneksi.php';

if (isset($_SESSION["login"])) {
	header("location: home.php");
	exit;
}

if(isset($_POST["login"]) ) {
	// menangkap dulu data username dan password dari post
	$username = $_POST["username"];
	$password = $_POST["password"];

	$result = mysqli_query($con, "SELECT * FROM user WHERE username = '$username'");

	if( mysqli_num_rows($result) === 1) {

		// cek password di database
		$row = mysqli_fetch_assoc($result);
		$_SESSION["login"] = true;
		header("Location: home.php");
		exit;
	}
	$error = true;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css" crossorigin="anonymous">
	<link rel="stylesheet" href="assets/css/login.css">
	<title>Responsive Login Form</title>
</head>
<body>
	<form action="" method="POST">
		<h3>Login</h3>
		<div class="form">
			<input type="text" id="username" required autocomplete="off" name="username">
			<label for="username">Username</label>
		</div>
		<div class="form">
			<input type="password" id="password" required autocomplete="off" name="password">
			<label for="password">Password</label>
			<span class="eye"><i class="fas fa-eye"></i></span>
		</div>
		<button type="submit" name="login">Login</button>
	</form>

	<script>
		const eye = document.querySelector('form .form span.eye');
		const icon = document.querySelector('form .form span.eye .fas');
		const password = document.getElementById('password');

		eye.addEventListener('click', function () {
			this.classList.toggle('active');
			if(this.classList.contains('active')) {
				icon.classList.replace('fa-eye', 'fa-eye-slash');
				password.setAttribute('type', 'text');
			} else {
				icon.classList.replace('fa-eye-slash', 'fa-eye');
				password.setAttribute('type', 'password');
			}
		})
	</script>
</body>
</html>