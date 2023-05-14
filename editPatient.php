<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

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

    <div class="container">
        <div class="row">
            <?php

            $id = $_GET['id'];

            $db = mysqli_connect("studentdb-maria.gl.umbc.edu", "benr2", "benr2", "benr2");

            $constructed_query = "SELECT patient_id, patient_fname, patient_lname, dob, address, phone_number, email, social_security, ethnicity 
                                FROM patients WHERE patient_id=$id";

            $result = mysqli_query($db, $constructed_query);

            $row_array = mysqli_fetch_array($result);

            $patient_id = $row_array['patient_id'];

            print("<h1 class=\"text-center mt-3\">Edit: $row_array[patient_fname], $row_array[patient_lname]</h1>");
            ?>
        </div>
        <form name="form" action="savedPatient.php" method="post">
            <div class="row">
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" name="firstName" class="form-control" id="firstName" value="<?php echo $row_array['patient_fname']; ?>">
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" name="lastName" class="form-control" id="lastName" value="<?php print($row_array['patient_lname']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="dob" class="form-label">Date of Birth</label>
                        <input type="date" name="dob" class="form-control" id="dob" value="<?php print($row_array['dob']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="address" class="form-label">Address: <?php print($row_array["address"]); ?></label>
                        <input type="text" name="address" class="form-control" id="address" value="<?php print($row_array['address']); ?>">
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="mb-3">
                        <label for="phone" class="form-label">Phone Number</label>
                        <input type="tel" name="phone" class="form-control" id="phone" value="<?php print($row_array['phone_number']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" value="<?php print($row_array['email']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ssn" class="form-label">Social Security Number</label>
                        <input type="text" name="ssn" class="form-control" id="ssn" value="<?php print($row_array['social_security']); ?>">
                    </div>
                    <div class="mb-3">
                        <label for="ethnicity" class="form-label">Ethnicity</label>
                        <input type="text" name="ethnicity" class="form-control" id="ethnicity" value="<?php print($row_array['ethnicity']); ?>">
                    </div>
                </div>
            </div>

            <h1 class="text-center mt-3">Patient Insurance</h1>

            <?php

            $constructed_query = "SELECT insurance_name, policy_num, group_num FROM insurance WHERE patient_id=$id";
            $result = mysqli_query($db, $constructed_query);
            $row_array = mysqli_fetch_array($result);

            ?>

            <div class="col-md-6">
                <div class="mb-3">
                    <label for="phone" class="form-label">Insurance Name</label>
                    <input type="tel" name="insuranceName" class="form-control" id="phone" value="<?php print($row_array['insurance_name']); ?>">
                </div>
                <div class="mb-3">
                    <label for="email" class="form-label">Policy Number</label>
                    <input type="text" name="policyNumber" class="form-control" value="<?php print($row_array['policy_num']); ?>">
                </div>
                <div class="mb-3">
                    <label for="ssn" class="form-label">group Number</label>
                    <input type="text" name="groupNumber" class="form-control" id="ssn" value="<?php print($row_array['group_num']); ?>">
                </div>
            </div>

            <div class="hidden">
                <input type="text" name="patientID" value=<?php print($id); ?> hidden="hidden">
            </div>
    </div>

    <div class="row">
        <div class="col-12 text-center">
            <button type="reset" class="btn btn-secondary" id="discard"
                onclick="window.location.href= 'secure_area.php';">Discard Changes</button>
            <button type="submit" class="btn btn-primary">Save</button>
        </div>
    </div>
    </form>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>