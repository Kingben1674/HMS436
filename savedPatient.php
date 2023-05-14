<?php
session_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <?php
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
    ?>

    <div class="col-12">
        <form action="logout.php" method="post">
            <a href="index.html">
                <input type="submit" class="btn btn-danger float-start mt-2" value="Logout">
                </button>
            </a>
        </form>
    </div>

    <?php
    $patient_id = $_POST["patientID"];
    $patient_fname = $_POST["firstName"];
    $patient_lname = $_POST["lastName"];
    $dob = $_POST["dob"];
    $address = $_POST["address"];
    $phoneNumber = $_POST["phone"];
    $email = $_POST["email"];
    $ssn = $_POST["ssn"];
    $ethniciy = $_POST["ethnicity"];
    $insuranceName = $_POST["insuranceName"];
    $policyNumber = $_POST["policyNumber"];
    $groupNumber = $_POST["groupNumber"];

    $db = mysqli_connect("studentdb-maria.gl.umbc.edu", "benr2", "benr2", "benr2");

    $constructed_query = "UPDATE patients SET patient_fname = '$patient_fname',
                                            patient_lname = '$patient_lname',
                                            dob = '$dob',
                                            address = '$address',
                                            phone_number = '$phoneNumber',
                                            email = '$email',
                                            social_security = '$ssn'.
                                            ethnicity = '$ethniciy'
                                             WHERE patient_id='$patient_id'";

    $result = mysqli_query($db, $constructed_query);

    $constructed_query = "UPDATE insurance SET insurance_name = '$insuranceName',
                                                policy_num = '$policyNumber',
                                                group_num = '$groupNumber' 
                                                WHERE patient_id = '$patient_id'";

    $result =mysqli_query($db, $constructed_query);

    header('Location: ClientSearch.php');
    ?>

    

</body>

</html>