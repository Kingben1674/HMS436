<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Edit Patient</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

    <a href=logout.php> || Logout ||</a>

    <?php

    $db = mysqli_connect("studentdb-maria.gl.umbc.edu", "benr2", "benr2", "benr2");

    $constructed_query = "SELECT patient_id, patient_fname, patient_lname, dob, address, phone_number, email, social_security, ethnicity 
                        FROM patients";
    
    $result = mysqli_query($db, $constructed_query);

    print("<h1>Edit $row_array[patient_id]");

    ?>
    <H1> Edit Patient </H1>

</body>

</html>