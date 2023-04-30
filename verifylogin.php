<?php

session_start(); // start a session to store user data

// hardcoded username and password
$username = "test";
$password = "test";

// get the submitted username and password
$submitted_username = $_POST['username'];
$submitted_password = $_POST['password'];

if ($submitted_username == $username && $submitted_password == $password) {
	// the username and password are correct, start a session and redirect to the secure area
	$_SESSION['username'] = $username;
	header("Location: secure_area.php");
	exit();
} else {
	// the username and password are incorrect, display an error message
	$error = "Invalid username or password.";
}
?>
