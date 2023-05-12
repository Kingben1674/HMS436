<?php

session_start(); // start a session to store user data

// hardcoded username and password
$username = "test";
$password = "test";

// get the submitted username and password
$submitted_username = $_POST['username'];
$submitted_password = $_POST['password'];

$db = mysqli_connect("studentdb-maria.gl.umbc.edu", "benr2", "benr2", "benr2");

$constructed_query = "SELECT login_id, password FROM staff";

$result = mysqli_query($db, $constructed_query);

$row_array = mysqli_fetch_array($result);

$login = $row_array['login_id'];
$password = $row_array['password'];

if ($submitted_username == $login && $submitted_password == $password) {
	// the username and password are correct, start a session and redirect to the secure area
	$_SESSION['username'] = $username;
	$_SESSION['loggedIn'] = true;
	header("Location: secure_area.php");
	exit();
} else {
	// the username and password are incorrect, display an error message
	$error = "Invalid username or password.";
}
?>