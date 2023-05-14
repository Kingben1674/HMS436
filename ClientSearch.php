<!DOCTYPE html>
<html>
<head>
	<title>Patient Search</title>
	<style>
		.container {
			max-width: 800px;
			margin: 0 auto;
			padding: 20px;
		}

		h1 {
			text-align: center;
		}

		.search-form {
			text-align: center;
			margin-bottom: 20px;
		}

		.search-input {
			padding: 10px;
			width: 300px;
			font-size: 16px;
		}

		.search-button {
			padding: 10px 20px;
			font-size: 16px;
			background-color: #4CAF50;
			color: white;
			border: none;
			cursor: pointer;
		}

		.add-patient-link {
			display: block;
			margin-top: 10px;
			text-align: center;
			font-size: 14px;
		}

		.patient-list {
			margin: 0;
			padding: 0;
			list-style-type: none;
		}

		.patient-item {
			border: 1px solid #ccc;
			padding: 10px;
			margin-bottom: 10px;
		}

		.patient-name {
			font-size: 18px;
			font-weight: bold;
			margin-bottom: 5px;
		}

		.patient-info {
			font-size: 14px;
		}

		.footer {
			background-color: #f1f1f1;
			padding: 20px;
			text-align: center;
		}
	</style>
</head>
<?php
require 'dbcon.php';
?>
<body>
	<div class="container">
		<h1>Patient Search</h1>

		<div class="search-form">
			<form action="search.php" method="GET">
				<input type="text" class="search-input" name="search" placeholder="Enter patient name or ID">
				<button type="submit" class="search-button">Search</button>
			</form>
            <br>
			<a href="new_patient.html">Add New Patient</a>
		</div>
	</div>

</body>
</html>
