<html>
<head>
	<title> Rate MyProfessor - Template </title>
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
		</style>
</head>


<?php
require 'dbcon.php';

?>

<header class="banner">
		<img src="avatar.jpeg">
	</header>
	
	<main>
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
				$id = $_GET['search'];
				$sql = "SELECT fname, lname, email, phone, address, emergency_contact_phone, emergency_contact_fname, emergency_contact_lname, policy_number, group_number, insurance_provider from tblpatient where fname like '%".$id."%' or lname like '%".$id."%'";
				//echo $sql;
				// SELECT * FROM table1 LEFT JOIN table2 ON table1.id=table2.id;
				$result = $conn->query($sql);

					while($row = $result->fetch_assoc()) 
					{
					
					echo 	"
							
								<div class=hero-backgroundcolor>
									<p> ".$row["patient_fname"]." ".$row["patient_lname"]." ".$row["email"]." - ".$row["dob"]."".$row["address"]":&nbsp;&nbsp;&nbsp; &nbsp;&nbsp;
									<a href=edit.php?id=".$row["id"].">Edit Patient</a><br><br></p><Hr>
								</div>
							";
						
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