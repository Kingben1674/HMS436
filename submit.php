<?php
 
	// $host="";
	// $user="";
	// $pass="";
	// $db="";
	
	$con = new mysqli($host,$user,$pass,$db);
	if(!$con){
		echo "There are some problem while connectiong the database.";
	}
		
	//patient table firlds
	$patient_fname=$_POST['patient_fname'];
    $patient_lname=$_POST['patient_lname'];
	$email=$_POST['email'];
    $phone_number=$_POST['phone_number'];
	$address=$_POST['address'];
    $dob=$_POST['dob'];
    $ethnicity=$_POST['ethnicity'];
    $social_security=$_POST['social_security'];

   //emergency contact aren't fields created in the exiting table
   //I think it's necessary but if you don't want to include those info, delete them
	$emergency_contact_phone=$_POST['emergency_contact_phone'];
    $emergency_contact_fname=$_POST['emergency_contact_fname'];
    $emergency_contact_lname=$_POST['emergency_contact_lname'];

    //insurance table fields
    $insurance_name=$_POST['insurance_name'];
    $group_num=$_POST['group_num'];
    $policy_num=$_POST['policy_num'];

	//inserting data
	$sql="INSERT INTO `patients`(`patient_fname`, `patient_lname`, `email`, `phone_number`, `address`, `dob`, `ethnicity`, `social_security`, `emergency_contact_phone`, `emergency_contact_fname`, `emergency_contact_lname`) 
    VALUES ('$patient_fname','$patient_lname','$email','$phone_number','$address','$dob','$ethnicity','$social_security','$emergency_contact_phone','$emergency_contact_fname','$emergency_contact_lname')";
   
   $sql="INSERT INTO `insurance`(`policy_num`, `group_num`, `insurance_name`) 
   VALUES ('$policy_num','$group_num','$insurance_name')";

    $insert = mysqli_query($con,$sql);
    if ($insert) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $con->error;
    }


$con->close();
?>