<?php
session_start();
?>
<html>

<head>
	<link rel="stylesheet" type="text/css" href="style.css" />
	<title>Hospital Staff Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

</head>

<body>
	<?php
	$_SESSION['isLoggedIn'] = false;
	?>

	<div class="container">
		<h2>Hospital Staff Login</h2>
		<form action="verifylogin.php" method="POST">
			<div class="imgcontainer">
				<img src="avatar.jpeg" alt="Avatar" class="avatar">
			</div>

			<div>
				<label for="username"><b>Username</b></label>
				<input type="text" placeholder="Enter Username" name="username" id="username" required>
				<div class="error" id="username-error">Please enter a valid username.</div>
			</div>

			<div>
				<label for="password"><b>Password</b></label>
				<input type="password" placeholder="Enter Password" name="password" id="password" required>
				<div class="error" id="password-error">Please enter a valid password.</div>
			</div>

			<button type="submit">Login</button>
		</form>
	</div>

</html>