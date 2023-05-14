<?php
session_start();
?>
<html>

<head>
	<title> Patient Search </title>
	<style>
		.banner {
			position: relative;
		}

		.banner img {
			width: 100px;
			height: 100px;
			position: absolute;
			top: 10px;
			left: 10px;
		}

		.col-12 {
			float: right;
			margin: 10px;

		}
	</style>
	<link rel="stylesheet" type="text/css" href="style.css" />
</head>


<?php

require 'dbcon.php';

if (isset($_POST['logout'])) {
	$_SESSION['loggedIn'] = false;
	session_destroy();
	header('Location: index.php');
	exit;
}

if (!isset($_SESSION['loggedIn']) || $_SESSION['loggedIn'] != true) {
	header('Location: index.php');
	exit;
}

require 'dbcon.php';

?>

<header class="banner">
	<img src="avatar.jpeg">
</header>

<main>

	<div class="col-12">

		<button onclick="window.location.href= 'ClientSearch.php';">
			Back to Search
		</button>
	</div>
	<div class="col-12">
		<form action="logout.php" method="post">
			<button onclick="window.location.href= 'logout.php';">
				Logout
				</a>
		</form>
	</div>


	<?php

	?>

	<article>
		<Center>
			<div class="hero-image">
				<p>Patients</p>
				<div>


					<Center>
						<div class="hero-backgroundcolor"><br>
							<?php

							$id = "";
							$id = $_POST['search'];
							$sql = "SELECT patient_id, patient_fname, patient_lname, dob, address, phone_number, email, social_security, ethnicity 
						FROM patients WHERE patient_fname LIKE '%" . $id . "%' OR patient_lname like '%" . $id . "%'";
							//echo $sql;
							// SELECT * FROM table1 LEFT JOIN table2 ON table1.id=table2.id;
							$result = $conn->query($sql);

							if ($result->num_rows == 0) {
								echo "
								<div class=hero-backgroundcolor>
									<p>There were no results</p>
								</div>
								";
							} else {

								while ($row = $result->fetch_assoc()) {


									echo "
							
								<div class=hero-backgroundcolor>
									<p> " . $row["patient_fname"] . " " . $row["patient_lname"] . " " . $row["email"] . " - " . $row["dob"] . " - " . $row["address"] . ":&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
									<a href=editPatient.php?id=" . $row["patient_id"] . ">Edit Patient</a><br><br></p><Hr>
								</div>
							";

								}
							}

							$conn->close();

							?>
						</div>
					</Center>
	</article>
</main>

<footer>
	<center>
		Footer information
	</center>
</footer>
</body>

</html>